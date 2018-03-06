 <?php 
 require "dbconfig/config.php";
 session_start();
 if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
 include ("functions/functiondisplayitem.php");
 include ("functions/functionadditem.php");
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
<br><br>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-6">
<br>
<div class="row">
		<div class="col-sm-12">
		<div class="panel panel-default">
		<div class="panel-heading" style="color:black;font-size:25px;">Add Item</div>
		
		
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
				 <form action="#" method="POST" enctype="multipart/form-data">
         
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
							<input type="file" name="pic" value="images"/>
							</div>
						<div class="form-group">
							<input style="width:120px;background-color:#00264d;" class="btn btn-default" type="submit" value="Submit" name="btnadlog" onclick="return fun1()"/>
						</div>
						
											

					</div>
					</form>		
</div>
</div>
		
		
		
		
		
		
		
		
		
		
	<?php 
add();
?> 
			 </div>
			 </div>
			 </div>
			 </div>
			  <div class="col-sm-4">
			  <br>
			  <div class="row">
			  <div class="col-sm-1"></div>
			  <div class="col-sm-11" >
			  <div class="panel panel-default" style="color:black;font-size:20px;">
		<div class="panel-heading" style="color:black;font-size:25px;">Items Entered</div>
			 <div class="panel panel-default" style="color:black;font-size:20px;">
			 <div class="panel-body">
			 <?php itemdisplay(); ?>
			 </div>
			 </div></div>
			 </div>
			 </div>
			 </div>
			
			 
</div>
</div>

</body>
</html>