<?php
require "dbconfig/config.php";
session_start();
global $cmt;
$uid=$_GET["userid"];
include "headproject.php";
if (isset($_POST['submit1'])) 
{
$resd=mysqli_query($con,"select * from reviews where UserName='".$_SESSION["uname"]."'");
	$ueamil=$_GET["email"];
	$cmt=$_POST['comments'];
	$result=mysqli_query($con,"select * from registerclient where userid=$uid");
	

	while($rowa=mysqli_fetch_array($result))
{
	
	
	
	$email=$rowa["email"];
	
	//$quantity=1;
	$uname=$_SESSION['uname'];
$qu=mysqli_query($con,"insert into reviews values('','','$uname','$email','$cmt')");
	echo '<script type="text/javascript"> alert("Comment Added")</script>';

}

}

?>
	 <script type="text/javascript">
  function fun1()
{
var a=document.getElementById("name").value;
var b=document.getElementById("email").value;
var c=document.getElementById("comments").value;

var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
if(a=="")
{
alert("Please enter your name..");
document.getElementById("name").focus();
return false;
}
if(pattern.test(a)){         
		return true;  
    }else{   
		alert("Please enter valid name..");
		document.getElementById("name").focus();
		return false;
    }

if(b=="")
{
alert("Please enter Email..");
document.getElementById("email").focus();
return false;
}
if(pattern.test(e)){         
		return true;  
    }else{   
		alert("Please enter valid Email..");
		document.getElementById("email").focus();
		return false;
    }
if(c=="")
{
alert("Please enter Comment");
document.getElementById("comments").focus();
return false;
}

}

</script>

</div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" name="send">Send</button>
        </div>
      </div>
<?php
}
?>