 <?php 
session_start();
 require "dbconfig/config.php";
 
 ?>
 <html>
<head>
<link rel="stylesheet" href="styles.css"/>
<link href="bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap.min.js" type="text/javascript"></script>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript"></script>
</head>
<body>
<?php 
include "headproject.php";
?>
<form method="post"><br><br>
<div class="row">
<div class="col-sm-2">&nbsp</div>

<div class="col-sm-3" style="color:black;font-size:25px;">Your Registerd Hotels</div>
</div>
<div class="container-fluid">
<div class="row">

			
			<div class="col-sm-6">
			 <?php include ("functions/fnhotelreg.php");
			 hotelreg(); ?>
			 </div>
			
</div>
</div>
</form>
</body>
</html>