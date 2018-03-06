<?php
//Include DB configuration file
require "dbconfig/config.php";

/*
 * Read POST data
 * reading posted data directly from $_POST causes serialization
 * issues with array data in POST.
 * Reading raw POST data from input stream instead.
 */        
$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);
$myPost = array();
foreach ($raw_post_array as $keyval) {
    $keyval = explode ('=', $keyval);
    if (count($keyval) == 2)
        $myPost[$keyval[0]] = urldecode($keyval[1]);
}

// Read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
if(function_exists('get_magic_quotes_gpc')) {
    $get_magic_quotes_exists = true;
}
foreach ($myPost as $key => $value) {
    if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
        $value = urlencode(stripslashes($value));
    } else {
        $value = urlencode($value);
    }
    $req .= "&$key=$value";
}

/*
 * Post IPN data back to PayPal to validate the IPN data is genuine
 * Without this step anyone can fake IPN data
 */
$paypalURL = "https://www.sandbox.paypal.com/cgi-bin/webscr";
$ch = curl_init($paypalURL);
if ($ch == FALSE) {
    return FALSE;
}
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSLVERSION, 6);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);

// Set TCP timeout to 30 seconds
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close', 'User-Agent: company-name'));
$res = curl_exec($ch);

/*
 * Inspect IPN validation result and act accordingly
 * Split response headers and payload, a better way for strcmp
 */ 
$tokens = explode("\r\n\r\n", trim($res));
$res = trim(end($tokens));
if (strcmp($res, "VERIFIED") == 0 || strcasecmp($res, "VERIFIED") == 0) {

    //Payment data
    $txn_id = $_POST['txn_id'];
    $payment_gross = $_POST['mc_gross'];
    $currency_code = $_POST['mc_currency'];
    $payment_status = $_POST['payment_status'];
    $payer_email = $_POST['payer_email'];
    
    //Check if payment data exists with the same TXN ID.
    $prevPayment = $con->query("SELECT payment_id FROM payments WHERE txn_id = '".$txn_id."'");
    if($prevPayment->num_rows > 0){
        exit();
    }else{
        //Insert tansaction data into the database
        $insertPayment = $con->query("INSERT INTO payments(txn_id,payment_gross,currency_code,payment_status,payer_email) VALUES('".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."','".$payer_email."')");
        if($insertPayment){
            //Insert order items into the database
            $payment_id = $con->insert_id;
            $num_cart_items = $_POST['num_cart_items'];
            for($i=1;$i<=$num_cart_items;$i++){
                $order_item_number = $_POST['item_number'.$i];
                $order_item_quantity = $_POST['quantity'.$i];
                $order_item_gross_amount = $_POST['mc_gross_'.$i];
                $insertOrderItem = $con->query("INSERT INTO order_items(payment_id,item_number,quantity,gross_amount) VALUES('".$payment_id."','".$order_item_number."','".$order_item_quantity."','".$order_item_gross_amount."')");
            }
        }
    }
}