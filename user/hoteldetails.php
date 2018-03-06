 <?php 
 require "dbconfig/config.php";
 session_start();
 
 if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
 include "carousel.php";
 include "headproject.php";
 ?>
 <html>
<head>
<link rel="stylesheet" href="styles.css"/>
<link href="bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap.min.js" type="text/javascript"></script>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript"></script>
<style>
  body {
      margin:0
  }
 .a {
	 text-align: center;
      
  }
 /*
 #mypanelId{
    background-image: none;
    background: rgba(1, 1, 5, 0.8);
    color: white;
     }*/
	 .panel-primary {
    border: none;
}
 p.double {border-style: double;}
</style>
</head>
<body>

<br><br>
<div class="row">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-10">

<!--<div class="container-fluid">


<div class="panel-group">	-->
	<p class="double"></p>
<div class="panel-body">

				<div class="panel panel-default">
				
				<div class="panel-heading" id="mypanelId"><div class="a" style="color:black;font-size:25px;">Available Hotels</div></div>
					<div class="panel-body">
						
						<?php include ("functions/fnhotelreg.php");
						hotelreg(); ?>

						

</div>
<p class="double"></p>
</div>
</div>


</div>
<div class="col-sm-1">&nbsp;</div>
</div>

</body>
</html>