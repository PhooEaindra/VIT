<?php
$autonid = $_POST['nhid'];
$category = $_POST['category'];
$shname = $_POST['shopname'];
$shtownship = $_POST['shoptownship'];
$shaddress = $_POST['shopaddress'];


include('includes/connection.php');

$sql = "UPDATE new_item_list SET Category='$category', ShopName='$shname', ShopTownship='$shtownship', ShopAddress='$shaddress' WHERE Id='$autonid'";

if(mysqli_query($connect,$sql))
{
	header('location:newitemlist.php');
}
else
{
	die('Unable to update record: ' .mysqli_error());
}
?>