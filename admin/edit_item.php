<?php
$itemID = $_GET['nID'];

	include('includes/connection.php');

	$sql ="SELECT * FROM new_item_list where Id = '$itemID'";
	$result = mysqli_query($connect,$sql);

	while($row = mysqli_fetch_array($result))
	{
	    $autonid = $row['Id'];
	    $cate = $row['Category'];
	    $shopname = $row['ShopName'];
	    $shoptown = $row['ShopTownship'];
	    $shopadd = $row['ShopAddress'];
	    // $image = $row['userImage'];
	    
	}


?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_nbread_four();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update New Item List</h2>
						<div class="box-icon">
							<a href="newitemlist.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_newitemlist.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Category:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="category" id="focusedInput" type="text" placeholder="Category" 
								  value="<?php echo $cate; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Shop Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="shopname" id="focusedInput" type="text" placeholder="Shop Name"
								  value="<?php echo $shopname; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Shop Township</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="shoptownship" id="focusedInput" type="text" placeholder="Township of the shop"
								  value="<?php echo $shoptown; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Shop Address:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="shopaddress" id="focusedInput" type="text" placeholder="Address of the shop"
								  value="<?php echo $shopadd; ?>">
								</div>
							  </div>
							  <!-- <div class="control-group">
								<label class="control-label" for="focusedInput">Image:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="image" id="focusedInput" type="file" placeholder="Image"
								  value="<?php echo $image; ?>">
								</div> 
							  </div> -->
							  <div class="form-actions">
								<button type="submit" onclick="return confirmnUpdate()" class="btn btn-primary">Save Changes</button>
								<input type="hidden" name="nhid" value="<?php echo $autonid; ?>">
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->