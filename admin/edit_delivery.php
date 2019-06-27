<?php
$deliID = $_GET['dID'];

	include('includes/connection.php');

	$sql ="SELECT * FROM delivery where Id = '$deliID'";
	$result = mysqli_query($connect,$sql);

	while($row = mysqli_fetch_array($result))
	{
	    $autoid = $row['Id'];
	    $user = $row['username'];
	    $pass = $row['password'];
	    $ph = $row['phNumber'];
	    $town = $row['deliTownship'];
	    // $image = $row['userImage'];
	    
	}


?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_dbread_four();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Delivery man's Data</h2>
						<div class="box-icon">
							<a href="delivery.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_delivery.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="username" id="focusedInput" type="text" placeholder="Username" 
								  value="<?php echo $user; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="password" id="focusedInput" type="password" placeholder="Password"
								  value="<?php echo $pass; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Phone no:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="phNumber" id="focusedInput" type="text" placeholder="Phone number"
								  value="<?php echo $ph; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Township:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="township" id="focusedInput" type="text" placeholder="Township they can deliver"
								  value="<?php echo $town; ?>">
								</div>
							  </div>
							  
							  </div> 
							  <div class="form-actions">
								<button type="submit" onclick="return confirmdUpdate()" class="btn btn-primary">Save Changes</button>
								<input type="hidden" name="dhid" value="<?php echo $autoid; ?>">
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