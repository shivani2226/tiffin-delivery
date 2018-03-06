<?php 
$db=mysqli_connect("localhost","root","","internship");
 $hid=$_GET["hotelid"];
function add()
{
	global $db,$hid;
	?>
	 <script type="text/javascript">
  function fun1()
{
	var a=document.getElementById("itemname").value;
var b=document.getElementById("price").value;
var c=document.getElementById("des").value;
if(a=="")
{
alert("Please enter item name..");
document.getElementById("itemname").focus();
return false;
}
if(b=="")
{
alert("Please enter Price..");
document.getElementById("price").focus();
return false;
}
if(c=="")
{
alert("Please enter Description of item..");
document.getElementById("des").focus();
return false;
}
}
</script>

<div class="panel-body">
				<div class="panel panel-default"  style="background-color:'#cccccc'">
				 <form action="" method="POST" enctype="multipart/form-data">
         
					<div class="panel-body">
					
						<div class="form-group">
						<label>Item Name</label>
						<input class="form-control" placeholder="Item Name.." type="text" name="itemname" id="itemname"></input>
						</div>
						<div class="form-group">
							<label>Price</label>
							<input class="form-control" placeholder="Price.." type="text" name="price" id="price" />
						</div>
						<div class="form-group">
							<label>Item Description:</label></div>
							<div class="col-sm-12">
							<div class="form-group">
							<textarea class="form-control" rows="5" name="des" id="des"></textarea>
							</div>
							</div>
							<div class="form-group"><label>Picture</label>
							<input type="file" name="image" value="image"/>
							</div>
						<div class="form-group">
							<input style="width:120px;background-color:#00264d;" class="btn btn-default" type="submit" value="Submit" name="btnadlog" onclick="return fun1()"/>
						</div>
						
											

					</div>
					</form>		
</div>
<?php

if(isset($_POST['btnadlog']))
{
	$itemname=$_POST['itemname'];
	$price=$_POST['price'];
	$des=$_POST['des'];
	echo $itemname;
	$v1=rand(1111,9999);
$v2=rand(1111,9999);
$v3=$v1.$v2;
$v3=md5($v3);
echo "start upload";
$dst1="";
  if(isset($_FILES['image'])){
	  echo "hi";
	   $a = $_FILES['image']['name'];
	$fnm=$_FILES['image']['name'];
	$dst="./product/".$v3.$fnm;
	$dst1="./product/".$v3.$fnm;
	echo $dst;
	echo $fnm;
	echo "progerss upload";
	move_uploaded_file($_FILES['image']['tmp_name'],$dst);
	
}
echo "end upload";

       $query="select * from item WHERE ItemName='$itemname'";
	   $query_run=mysqli_query($db,$query);
	   if(mysqli_num_rows($query_run)>0)
	   {
		   echo '<script type="text/javascript">alert("Item already entered")</script>';
	   }
	   else
	   {
		   $query="insert into items values('','$hid','$itemname','$price','$des','$dst1')";
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