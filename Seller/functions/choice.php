<?php 
$db=mysqli_connect("localhost","root","","internship");
 $uid = $_GET["userid"];
function add()
{
	global $db,$uid;
$res=mysqli_query($db,"select * from registeruser where userid=$uid");
					$row=mysqli_fetch_array($res);
				
					
					$id=$row['userid'];
					?>
				<label>Click <?php echo "<a href='itemaddition.php?userid=$id'> here </a>"; ?>  to  add  items</label><br>
				<label>Click <?php echo "<a href='reg.php?userid=$uid'> here </a>"; ?>  to  add Hotels</label>
				<?php
}
?>