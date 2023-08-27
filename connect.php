<?php 
/*
there are two way to connect the database
1.mysqli extension
2.PDO(php data object)
using mysql object:-
a.mysqli(object oriented)
b.mysqli(procedural)
*/
//mysqli object-oriented
/*
$con=new mysqli("localhost","mukesh","123456","batch830");
if($con->connect_error)
{
	echo "connection failed";
}
else
{
	echo "connection done";
}
*/
$con=mysqli_connect("localhost","Mukesh","12345","batch830pm");
// if(!$con)
// {
// 	echo "connection failed";
// }
// else
// {
// 	echo "connection done with mysql i procedural";
// }
?>