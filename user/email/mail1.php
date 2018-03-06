<?php
require "dbconfig/config.php";
session_start();
if(empty($_SESSION['uname']))
{
	header("Location:wrong.php");
	exit();
}
//include "headproject.php";

$username=$_SESSION['uname'];
$resd=mysqli_query($con,"select * from cart where UserName='$username'");
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '******@gmail.com';                 // SMTP username
$mail->Password = '******';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('******@gmail.com', 'JUST EAT');
while($row=mysqli_fetch_array($resd))
{

$mail->addAddress($row["HotelEmail"], 'Shivani');

}

     // Add a recipient
//$mail->addAddress('#######@gmail.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'You have a new order';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

?>
<div class="row">
<div class="col-sm-12">
<div class="col-sm-6" style="color:red;font-size:30px;font-family:Times-New-Roman">
<?php
if(!$mail->send()) 
{

	
  echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'YOUR ORDER HAS BEEN PLACED...Thank You..';
}
?>
</div>
</div>
</div>

