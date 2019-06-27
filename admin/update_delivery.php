<?php
$autodid = $_POST['dhid'];
$un = $_POST['username'];
$pw = $_POST['password'];
$phno = $_POST['phNumber'];
$twn = $_POST['township'];
// $img = $_POST['image'];

include('includes/connection.php');

$sql = "UPDATE delivery SET username='$un', password='$pw', phNumber='$phno', deliTownship='$twn',  WHERE Id='$autodid'";

 if(mysqli_query($connect,$sql))
 {
 	header('location:delivery.php');
 }
 else
 {
 	die('Unable to update record: ' );
 }
?>