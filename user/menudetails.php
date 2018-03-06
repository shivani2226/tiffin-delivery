 <?php 
 session_start();
 if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
 require "dbconfig/config.php";
 
include "carousel.php";
 include "headproject.php";
$hid=$_GET["hotelid"];
 ?>
 <html>
<head>
<style>
p.double {border-style: double;} 
   #sub{
	   width: 6em;  height: 2em;
   }
   </style>
<link rel="stylesheet" href="styles.css"/>
<link href="bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap.min.js" type="text/javascript"></script>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript"></script>
</head>
<body>
<br><br>


                   <?php
$res=mysqli_query($con,"select * from item where hotelid=$hid");
?>
<div class="container">
			<div class="row">
			<p class="double"></p>
			<div class="panel panel-default">
			<div class="panel-body">
			<?php
while($row=mysqli_fetch_array($res))
{
?>
<div class="col-sm-4">
<a href="item_description.php?itemid=<?php echo $row["itemid"]; ?>&hotelid=<?php echo $row["hotelid"]; ?>">


					<div class="panel panel-default" style="width:240px">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center" style="font-size:20px;">
								<br>
                <img src="../Seller/<?php echo $row["Picture"];?>" alt="" width="200" height="200" />
									<p><label><?php echo $row["ItemName"]; ?></label></p>
                                    <p><label>Rs.<?php echo $row["Price"]; ?></label></p>
									
									
									
                                 </div>
                               <br>
							   
                            </div>
                            
                        </div>
				</div>
				
                    </div>
					</a>
					
					
<?php


}

                    ?>
					
</div>
			</div>
			<p class="double"></p>
			</div>
			</div>
				  
                  
</body>
</html>