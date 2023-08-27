<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	*{
		background-color:lightblue;
	}
	 .c25{
		height:320px;
		width:300px;
	    border-style: solid;
		margin-left: auto;
		margin-right: auto;
		margin-top: 200px;
		text-align: center;
	    }
</style>
<body>
<div class="c25">
	<p style="font-size: 25px;">Programming Classes</p>
<form method="post">
	<label>Login ID:</label>
	<input type="text" name="txtid">
	<br><br>
	<label>Password:</label>
	<input type="Password" name="txtpass">
	<br><br>
	<input type="submit" name="btnsubmit">
</form>
<br>
<a href="createaccount.php">New Account</a> 
<a href="forgetpass.php">Forget Password</a>
</div>
<div style="margin-left: 625px;font-size: 20px;color: red;">
<?php 
include 'connect.php';
if(isset($_POST['btnsubmit']))
{
	$uid=$_POST['txtid'];
	$pass=$_POST['txtpass'];
	$sql="select * from tbluser where uid='$uid' and pass='$pass'";
	$res=$con->query($sql);
	if($res->num_rows>0)
	{
		session_start();
		$_SESSION['user']=$uid;
		header("location:Recordshow.php");
	}
	else
	{
		echo "Login failed";
	}


}
?>
</div>
</body>
</html>
