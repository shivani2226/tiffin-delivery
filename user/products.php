<?php
//Include db configuration file
require "dbconfig/config.php";

//PayPal API URL
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';

//PayPal Business Email
$paypalID = '0504receive@gmail.com';
?>
<div class="container">
<?php
    //Fetch products from the database
    $results = $con->query("SELECT * FROM item");
    while($row = $results->fetch_assoc()){
?>
    <div class="proBox">
        <img src="../Seller/<?php echo $row['Picture']; ?>"/>
        <p>Name: <?php echo $row['ItemName']; ?></p>
        <p>Price: <?php echo $row['Price']; ?></p>
        <form target="_self" action="<?php echo $paypalURL; ?>" method="post">
            <!-- Identify your business so that you can collect the payments. -->
            <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
            
            <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="add" value="1">
            
            <!-- Specify details about the item that buyers will purchase. -->
            <input type="hidden" name="item_name" value="<?php echo $row['ItemName']; ?>">
            <input type="hidden" name="item_number" value="<?php echo $row['itemid']; ?>">
            <input type="hidden" name="amount" value="<?php echo $row['Price']; ?>">
            <input type="hidden" name="currency_code" value="USD">
            <input type='hidden' name='notify_url' value='ipn.php'>
            <!-- Specify URLs -->
            <input type='hidden' name='cancel_return' value='cancel.php'>
            <input type='hidden' name='return' value='success.php'>
            
            <!-- Display the payment button. -->
            <input type="image" name="submit"
              src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
              alt="Add to Cart">
            <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
        </form>
    </div>
<?php } ?>
</div>