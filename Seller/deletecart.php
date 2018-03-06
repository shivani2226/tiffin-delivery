<?php
require "dbconfig/config.php";
session_start();
if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
if(isset($_GET['delete_c']))
{
$delete_id=$_GET['delete_c'];
$delete_c="delete from orders where itemid=$delete_id";
$run_delete=mysqli_query($con,$delete_c);
if($run_delete)
{
echo "<script>alert('Item Deleted')</script>";
 ?>
 <div class="row">
<div class="col-sm-12">
<div class="col-sm-6" style="color:red;font-size:30px;font-family:Times-New-Roman">Order Deleted</div>
<?php
}
}