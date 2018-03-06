<?php 
$db=mysqli_connect("localhost","root","","internship");
 $hid=$_GET["hotelid"];
function add()
{
	global $db,$hid;

	
if(isset($_POST['btnadlog']))
{
	$itemname=$_POST['itemname'];
	$price=$_POST['price'];
	$des=$_POST['des'];
	
	$v1=rand(1111,9999);
$v2=rand(1111,9999);
$v3=$v1.$v2;
$v3=md5($v3);
	$fnm=$_FILES['pic']['name'];	
	$dst="product/".$v3.$fnm;
	
	$dst1="./product/".$v3.$fnm;
	move_uploaded_file($_FILES['pic']['tmp_name'],$dst);

       $query="select * from item WHERE ItemName='$itemname' and hotelid='$hid'";
	    $query5="select * from registerhotel WHERE hotelid=$hid";
		$query_run5=mysqli_query($db,$query5);
		$row5=mysqli_fetch_array($query_run5);
		$hotemail=$row5["HotelEmail"];
		$hotname=$row5["HotelName"];
	   $query_run=mysqli_query($db,$query);
	   if(mysqli_num_rows($query_run)>0)
	   {
		   echo '<script type="text/javascript">alert("Item already entered")</script>';
	   }
	   else
	   {
		   $query="insert into item values('','$hid','$itemname','$price','$des','$dst1','$hotname','$hotemail')";
		   $query_run=mysqli_query($db,$query);
		   if($query_run)
		   {
			   echo '<script type="text/javascript"> alert("Item registered")</script>';
			  
		   }
		   else
		   {
			   echo '<script type="text/javascript"> alert("Error")</script>';
		   }
	   }

}
}	

?>
