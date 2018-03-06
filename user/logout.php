<?php 
echo "logged out successfully";
 session_start();
 unset($_SESSION['username']);
 session_destroy();
 header("Location: login.php");
exit;
 ?>
 
