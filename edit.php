<?php 
include 'connect.php';
$stuid=$_REQUEST['id'];
$sql="select name,phno,course from tblenquery2 where stuid=".$stuid;
$res=$con->query($sql);
$row=$res->fetch_assoc();
if(isset($_POST['btnsubmit']))
{
	$n=$_POST['txtname'];
	$p=$_POST['txtphno'];
	$c=$_POST['txtcourse'];
	$sql="update tblenquery2 set name='$n',phno='$p' ,course='$c'where stuid=".$stuid;
	if($con->query($sql))
		{
			header("location:Recordshow.php");
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<label>Name:</label>
	<input type="text" name="txtname" value=<?php echo $row['name'];?>>
	<label>Phone No</label>
	<input type="text" name="txtphno" value="<?php echo $row['phno'];?>">
	<label>Course</label>
	<input type="text" name="txtcourse" value="<?php echo $row['course'];?>">
	<input type="submit" name="btnsubmit">
</form>
</body>
</html>