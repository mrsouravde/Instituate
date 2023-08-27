<?php 
session_start();
if(!isset($_SESSION['user']))
{
header("location:login.php");
}
?> 
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
	</style>
</head>
<body>
<h2>
	Welcome:
	<?php
	echo $_SESSION['user'];
	?>
<a href="logout.php">Logout</a>
</h2>
</body>
</html>
<?php
include 'connect.php';
$sql="select * from tblenquery2";
$res=$con->query($sql);
?>
<table border="1" style="font-size: 20px;">
	<tr>
		<th>Name</th>
		<th>Phone No</th>
		<th>Email</th>
		<th>Course</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
<?php
while($row=$res->fetch_assoc())
{	
?>
	<tr>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['phno'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['course'];?></td>
		<td><a href="edit.php?id=<?php echo $row['stuid'];?>">update</a></td> 
	    <td><a href="delete.php?id=<?php echo $row['stuid'];?>">delete</a></td>
	</tr>
<?php
}
?>
</table>