 <?php 
 session_start();
 require "dbconfig/config.php";
 include ("functions/fnitemadd.php");

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
include "carousel.php";
?>
<form method="post"><br><br>
<div class="row">
<div class="col-sm-2">&nbsp</div>

<div class="col-sm-3" style="color:black;font-size:25px;">Your Menu</div>
</div>
<div class="container-fluid">
<div class="row">

			
			<div class="col-sm-6">
			 <?php hotelreg(); ?>
			 </div>
			 <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
<div class="container-fluid">

<div class="col-sm-10">
                 
</div>
</div>
</form>
</body>
</html>