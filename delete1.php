<?php 
include 'conn1.php';
extract($_GET);
$query="DELETE FROM admin WHERE id='$id'";
mysqli_query($conn1,$query);
header('location:display1.php');
?>