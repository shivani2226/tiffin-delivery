<?php
require "dbconfig/config.php";
include "functions/choice.php";
session_start();
if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
include "headproject.php"
?>
<html>
<head></head>
<body background="img9.jpg">
<br><br><br>
<div class="container">
<div class="row">
<div class="col-sm-12"></div>
<div class="col-sm-12"></div>
<div class="col-sm-12"></div>
<div class="col-sm-12"></div>
<div class="col-sm-12"></div>
<div class="col-sm-12"></div>
<div class="col-sm-12"></div><div class="col-sm-12"></div><div class="col-sm-12"></div>
<div class="col-sm-12"></div>
<div class="col-sm-12"></div>
<div class="col-sm-12"></div>
<div class="col-sm-12"></div>
<div class="col-sm-12"></div>
<div class="col-sm-5"></div>
<div class="col-sm-5" style="font-size:20px">
<?php add(); ?>
	</div>	
</body>
</html>