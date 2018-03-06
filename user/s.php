<?php 
 session_start();
 if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
include "carousel.php";
 include "headproject.php";
 require "dbconfig/config.php";
$output='';
?>

<html>
<head>
<style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    
    border-radius: 4px;
    font-size: 16px;
    background-color: white;

  
	 background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    //-webkit-transition: width 0.4s ease-in-out;
    //transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
p.double {border-style: double;} 
   #sub{
	   width: 6em;  height: 2em;
   }
</style>
</head>
<body>

<?php
if(isset($_GET['search']))
{
	$user_keyword=$_GET['user_query'];
	$get_products="item where ItemName like '%$user_keyword%'";
       
$run_products=mysqli_query($con,"select * from item where ItemName like '%$user_keyword%'");
			?>
			<div class="container">
			<div class="row">
			
			
			<p class="double"></p>
			<div class="panel panel-default">
			<div class="panel-body">
			<?php
			
			
			
			
			while($row=mysqli_fetch_array($run_products))
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
			
			<?php
			
	}
	

?>
			
			
			
			
			
			
			
			
			
			
			
		<!--	while($row=mysqli_fetch_array($run_products))
			{
				$iid=$row['itemid'];
				$hid=$row['hotelid'];
				$iname=$row['ItemName'];
				$iprice=$row['Price'];
				$output .='<div>' .$iname. '</div>';
				?>


				<div class="col-sm-4">
				<a href="item_description.php?itemid=<?php echo $row["itemid"];?>&hotelid=<?php echo $row["hotelid"];?>">
					<div class="panel panel-default">
					
	<!--<a href="item_description.php?itemid=<?//php echo $row["itemid"];?>&hotel=<?//php echo $row["hotelid"];?>"><br>
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center" style="font-size:20px;">
<img src="../Seller/<?php echo $row["Picture"];?>" alt="" width="150" height="200" />
									<p><?php echo $output; ?></p>
                                    <p>Rs.<?php echo $row["Price"]; ?></p>
                                 </div>
                               <br>
							   </div>
                         </div>
						  </div>
                            </a>
                        </div>
						
						
                    
					<?php
			
			?>
			-->
			
			
</body>
</html>