 <?php 
 require "dbconfig/config.php";
 session_start();
 if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
 include ("functions/functionhotelreg.php");
 ?>
 <html>
<head>
<link rel="stylesheet" href="styles.css"/>
<link href="bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap.min.js" type="text/javascript"></script>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript"></script>
</head>
<body background="img7.jpg">
<?php 
include "headproject.php";
?>
<form method="post"><br><br>
<br>
<div class="container-fluid">
<div class="row">

			
			<div class="col-sm-10">
			<div class="row" style="font-size:20px;font-color:black">
			<div class="col-sm-4"></div>
			<div class="col-sm-8">
			<div class="panel panel-default">
			<div class="panel-heading" style="color:black;font-size:25px;">Your Registerd Hotels</div>
			 <?php hotelreg(); ?>
			 </div>
			 </div>
			 </div>
			
			
</div>
</div>
</form>
</body>
</html>