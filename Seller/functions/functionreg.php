<?php 
$db=mysqli_connect("localhost","root","","internship");
 $id=$_GET["userid"];
function reg()
{
	global $db,$id;
	if(isset($_POST['btnadlog']))
{
	$sname=$_POST['sellername'];
	$hname=$_POST['hotelname'];
	$hadd=$_POST['address'];
	$contact_no=$_POST['hotelcontact'];
	$hemail=$_POST['hotelemail'];
	$hlat=$_POST['hotellat'];
	$hlong=$_POST['hotellong'];
	
 
	$query="select * from registerhotel WHERE HotelName='$hname'";
	   $query_run=mysqli_query($db,$query);
	   if(mysqli_num_rows($query_run)>0)
	   {
		   echo '<script type="text/javascript">alert("Hotel already registered")</script>';
	   }
	   else
	   {
		   $query="insert into registerhotel values('','$id','$sname','$hname','$hadd','$contact_no','$hemail','$hlat','$hlong')";
		   $query_run=mysqli_query($db,$query);
		   if($query_run)
		   {
			   echo '<script type="text/javascript"> alert("Hotel registered")</script>';
		
		   }
		   else
		   {
			   echo '<script type="text/javascript"> alert("Error")</script>';
		   }
	   }
}
	
}
?>