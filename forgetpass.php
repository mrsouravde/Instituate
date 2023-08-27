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
		.c27{
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
<div class="c27">
<p style="font-size: 25px;">Forget Password</p>
<form method="post">
	<label>User ID:</label>
	<input type="text" name="txtid">
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
$id=$_POST['txtid'];
$sql="select * from tbluser where uid='$id'";
$res=$con->query($sql);
if($res->num_rows==1)
	{
	header("location:changepass.php?id='$id'");	
	}
}
?>