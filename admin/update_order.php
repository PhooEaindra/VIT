<?php
$autoid = $_POST['ohid'];
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$email = $_POST['txtemail'];
$ph = $_POST['phone'];



include('includes/connection.php');

$sql = "UPDATE ordertable SET Username='$un', Password='$pw', Email='$email', Phone='$ph' WHERE id='$autoid'";

if(mysqli_query($connect,$sql))
{
	header('location:order.php');
}
else
{
	die('Unable to update record: ' .mysqli_error());
}
?>