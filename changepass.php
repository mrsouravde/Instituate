<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
		*{
			background-color: lightblue;
		}
		.c28{
		height:320px;
		width:300px;
		border:solid;
		margin-left: auto;
		margin-right: auto;
		margin-top: 200px;
		text-align: center;
		}
	</style>
<body>
	<div class="c28">
	<p style="font-size: 25px;">Change Password</p>
<form method="post">
	<label>New Password:</label>
	<input type="Password" name="txtpass">
	<br><br>
	<label>Confirm Password:</label>
	<input type="Password" name="txtcpass">
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
$id=$_REQUEST['id'];
$p1=$_POST['txtpass'];
$p2=$_POST['txtcpass'];
if($p1==$p2)
	{
	$sql="update tbluser set pass='$p1'where uid=".$id;
	if($con->query($sql))
			{
				header("location:login.php");
			}
	}
else
	{
	echo 'Password and confirm password not matched';
	}
}
?>