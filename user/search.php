<?php
require "dbconfig/config.php";
session_start();
include "headproject.php";
?>
<head>
<br><br>
<!--<style>

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(10%);
      filter: grayscale(10%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  </style>-->
</head>
<div class="container-fluid">
  
			 <div class="row ">
    <div class="col-sm-2 sidenav">
      <div class="panel panel-default">
	  <h1><b>Search</b></h1>
	  <div id="form">
	  <form method="get" action="search.php" enctype="multipart/form-data">
	<input type="text" placeholder="Search" name="user_query"/><button type="submit" class="btn btn-sm" name="search" style="background-color:green;margin-top:2px;">Search</button>
	</form>
	</div>
	<div class="panel-heading" style="color:black"><b>Categories</b></div>
              <?php/*
        $res=mysqli_query($con,"select * from category");
		
				$get_cat="select * from category";
				$run=mysqli_query($con,$get_cat);
				while($row_cats=mysqli_fetch_array($run))
				{
					
					$cat_id=$row_cats['cat_id'];
					$cat_title=$row_cats['cat_name'];
					?>
				<?php echo "<li><a href='categoryshop.php?cat=$cat_id'>$cat_title</a></li>"; ?>
				
				<?php
				}*/
		?>
		</div>
</div>

			<!--<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />-->
<div class="container-fluid">

<div class="col-sm-10">
                   <?php/*
if(isset($_GET['search']))
{
	
 include("pagination/function.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 9; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
		$user_keyword=$_GET['user_query'];
	$get_products="new_arrival where product_keyword like '%$user_keyword%'";
       
$run_products=mysqli_query($con,"select * from {$get_products} LIMIT {$startpoint} , {$limit}");
while($row_products=mysqli_fetch_array($run_products))
{
	$pro_id=$row_products['product_id'];
	$pro_title=$row_products['product_name'];
	$pro_des=$row_products['product_des'];
	$pro_price=$row_products['product_price'];
	$pro_img=$row_products['product_image'];
	
?>*/
					<div class="col-sm-4">
					<div class="panel">
			 <a href="product_detail.php?id=<?php echo $row_products["product_id"]; ?>"><i class="fa fa-shopping-cart"></i><br>
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center" style="font-size:20px;">
      <!--          <img src="admin/<?php /*echo $row_products["product_image"];?>" alt="" width="150" height="200" />
									<p><?php echo $row_products["product_name"]; ?></p>
                                    <p>Rs.<?php echo $row_products["product_price"]; ?></p>
                                 </div>*/
                               <br>
							   
                            </div>
                            
                        </div>
						</div>
						</a>
                    </div>
					
					
<?php
}
}
           ?>
					

				  </div>
                    </div>
					</div>
                 
</div>
        </div>
    </div>
                    
                </div><!--features_items-->
				<ul class="pagination">
					<?php
                        //echo pagination($get_products,$limit,$page);
                    ?>
					</ul>
                </div><!--features_items-->
            
</section>
