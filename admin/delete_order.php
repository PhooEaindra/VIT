<?php
$id = $_GET['deloID'];

include('includes/connection.php');

$sql = "DELETE FROM ordertable WHERE id=$id";
if(mysqli_query($connect,$sql))
{
	header('location:order.php');
}
else
{
	die('Could not delete record:' .mysqli_error());
}
?>