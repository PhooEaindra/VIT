<?php
$id = $_GET['deldID'];

include('includes/connection.php');

$sql = "DELETE FROM delivery WHERE Id=$id";
if(mysqli_query($connect,$sql))
{
	header('location:delivery.php');
}
else
{
	die('Could not delete record:' .mysqli_error());
}
?>