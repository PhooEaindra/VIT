<?php
$orderID = $_GET['oID'];

	include('includes/connection.php');

	$sql ="SELECT * FROM ordertable where id = '$orderID'";
	$result = mysqli_query($connect,$sql);

	while($row = mysqli_fetch_array($result))
	{
	    $autoid = $row['id'];
	    $title = $row['title'];
	    $shname = $row['shopname'];
	    $addr = $row['destinationaddr'];
	    
	    
	}


?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_obread_four();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update User's Data</h2>
						<div class="box-icon">
							<a href="order.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_order.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Title:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="title" id="focusedInput" type="text" placeholder="Title" 
								  value="<?php echo $title; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Shop name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="shopname" id="focusedInput" type="text" placeholder="Shop Name"
								  value="<?php echo $shname; ?>">
								</div>
							  </div>
							 
								
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Destination Address:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="address" id="focusedInput" type="text" placeholder="Destination Address"
								  value="<?php echo $addr; ?>">
								</div>

								</div>
							  <!-- <div class="control-group">
								<label class="control-label" for="focusedInput">Phone no:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="phone" id="focusedInput" type="text" placeholder="Phone number"
								  value="<?php echo $phone; ?>">
								</div>
 -->
							  </div>
							  </div> 
							  <div class="form-actions">
								<button type="submit" onclick="return confirmoUpdate()" class="btn btn-primary">Save Changes</button>
								<input type="hidden" name="ohid" value="<?php echo $autoid; ?>">
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