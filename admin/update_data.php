<?php
$autoid = $_POST['hid'];
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$email = $_POST['txtemail'];
$ph = $_POST['phone'];



include('includes/connection.php');

$sql = "UPDATE tblusers SET Username='$un', Password='$pw', Email='$email', Phone='$ph' WHERE id='$autoid'";

if(mysqli_query($connect,$sql))
{
	header('location:users.php');
}
else
{
	die('Unable to update record: ' .mysqli_error());
}
?>