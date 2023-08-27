<?php 
session_start();
session_destroy();
$n=$_SESSION['UserName'];
echo $n;
?>