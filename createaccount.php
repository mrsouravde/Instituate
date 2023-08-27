<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			background-color: lightblue;
		}
		.c26{
		height:320px;
		width:300px;
		border:solid;
		margin-left: auto;
		margin-right: auto;
		margin-top: 200px;
		text-align: center;
		}
	</style>
</head>
<body>
<div class="c26">
<p style="font-size: 25px;">Create Account</p>
<form method="post">
	<label>User ID:</label>
	<input type="text" name="txtid">
	<br><br>
	<label>Name</label>
	<input type="text" name="txtname">
	<br><br>
	<label>Phone No</label>
	<input type="number" name="txtno">
	<br><br>
	<label>Password:</label>
	<input type="Password" name="txtpass">
	<br><br>
	<input type="submit" name="btnsubmit">
</form>
</div>
</body>
</html>
<?php 
include 'connect.php';
if(isset($_POST['btnsubmit']))
{
	$uid=$_POST['txtid'];
	$n=$_POST['txtname'];
	$phno=$_POST['txtno'];
	$pass=$_POST['txtpass'];
	$sql="insert into tbluser values('$uid','$n','$phno','$pass')";
	if($con->query($sql))
	{
		header("location:login.php");
	}

}
?>