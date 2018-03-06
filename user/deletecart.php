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
$delete_c="delete from cart where itemid=$delete_id";
$run_delete=mysqli_query($con,$delete_c);
if($run_delete)
{
echo "<script>alert('Item Deleted')</script>";
 header("Location:cart.php");
}
}