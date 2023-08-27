<?php 
include 'connect.php';
$stuid=$_REQUEST['id'];
$sql="delete from tblenquery2 where stuid=".$stuid;
if($con->query($sql))
{
	header("location:Recordshow.php");
}
?>