<?php
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];
$email = $_POST['txtemail'];

include('includes/connection.php');

$sql = "INSERT INTO tblusers VALUES(NULL,'$un','$pw','$fn','$ln','$email')";

if (mysqli_query($connect,$sql))
{
	header('location:users.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>