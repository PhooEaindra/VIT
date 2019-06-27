<?php
$id = $_GET['delnID'];

include('includes/connection.php');

$sql = "DELETE FROM new_item_list WHERE Id=$id";
if(mysqli_query($connect,$sql))
{
	header('location:newitemlist.php');
}
else
{
	die('Could not delete record:' .mysqli_error());
}
?>