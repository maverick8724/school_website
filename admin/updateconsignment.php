<?php include 'include/header.php';?>
<?php 
$update=$_GET['update'];

$query="SELECT * FROM tracks WHERE id='$update'"; 
$result = mysqli_query($conn,$query);
$row =  mysqli_fetch_array($result, MYSQLI_BOTH);

$id =$row['id'];
$s_name =$row['s_name'];
$s_address =$row['s_address'];
$s_phone =$row['s_phone'];
$r_name =$row['r_name'];
$r_address =$row['r_address'];
$r_phone =$row['r_phone'];
$r_email =$row['r_email'];
$consignment =$row['consignment'];
$weight =$row['weight'];
$dimension =$row['dimension'];
$location =$row['location'];
$fees =$row['fees'];
$tracking_id =$row['tracking_id'];
$takeoff_date =$row['takeoff_date'];
$delivery_date =$row['delivery_date'];
$status =$row['status'];

?>
<div class="main-container">
<div class="pd-ltr-20 xs-pd-20-10">

			<div class="pd-20 card-box mb-30">
						
						<div class="wizard-content">
						<form  onsubmit="registerajax()" class=" wizard-circle wizard">
							<div class="clearfix">
							<h4 class="text-blue h4">Consignment Details</h4>
						 	</div><hr>
								<section>
									<input name='update' value="<?=$update;?>" hidden>
									<div class="row">
									<div class="col-md-6">
											<div class="form-group">
												<label>Consignment :</label>
												<input type="text" name="consignment" value="<?=$consignment;?>" class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Weight :</label>
												<input type="text" name="weight" value="<?=$weight;?>"class="form-control" />
											</div>
										</div><div class="col-md-6">
											<div class="form-group">
												<label>Dimension :</label>
												<input type="text" name="dimension" value="<?=$dimension;?>"class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Charges :</label>
												<input type="text" name="fees" value="<?=$fees;?>" class="form-control" />
											</div>
										</div>
									</div>
									
								</section>
								<!-- Step 2 -->
								<div class="clearfix">
							<h4 class="text-blue h4">Sender Info</h4>
							</div>
								<hr>
								<section>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Sender Name :</label>
												<input type="text" name="s_name"value="<?=$s_name;?>" class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Sender phone :</label>
												<input type="tel" name="s_phone" value="<?=$s_phone;?>"class="form-control" />
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Sender Address :</label>
												<textarea name="s_address" class="form-control"><?=$s_address;?></textarea>
											</div>
										</div>
									</div>
								</section>
								<div class="clearfix">
							<h4 class="text-blue h4">Receiver Info</h4>
							</div><hr>
								<section>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Receiver Name :</label>
												<input type="text" name="r_name" value="<?=$r_name;?>"class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Receiver phone :</label>
												<input type="tel" name="r_phone" value="<?=$r_phone;?>"class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Receiver email :</label>
												<input type="email" name="r_email" value="<?=$r_email;?>"class="form-control" />
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Receiver Address :</label>
												<textarea name="r_address"  class="form-control"><?=$r_address;?></textarea>
											</div>
										</div>
									</div>
								</section>
								<div class="clearfix">
							<h4 class="text-blue h4">Shipping Info</h4>
							</div><hr>
								<section>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Tracking ID :</label>
										
											<input type="text" name="tracking_id" value="<?=$tracking_id;?>" readonly class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Take-off date :</label>
												<input type="text" name="takeoff_date" value="<?=$takeoff_date;?>" class="form-control"/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Delivery date :</label>
												<input type="text" name="delivery_date" value="<?=$delivery_date;?>"class="form-control"/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Current Location :</label>
												<input type="text" name="location" value="<?=$location;?>" class="form-control"/> 
											</div>
										</div><div class="col-md-6">
											<div class="form-group">
												<label>Status :</label>
												<select type="text" name="status" value="<?=$status;?>" class="form-control"/>
												<option value="Held">On Hold</option>
												<option value="Taking off">Take off</option>
												<option value="On the way">On the way</option>
												<option value="Delivered">Delivered</option>
												</select>
											</div>
										</div>
										</div>
										<span id="show_message"></span>
						
										<button type="submit" name="submit" id="regiterbtn" class="btn btn-primary">Submit</button>
									</div>
									
								</section>
							</form>
							
						</div>
					</div>

	
					<script>
	function registerajax() {
	event.preventDefault();

	  $('#regiterbtn').html('<span class="spinner-grow spinner-grow-sm"></span> Please Wait...');
		$('#regiterbtn').prop('disabled',true);

			  $.ajax({
				type: 'POST',
				url: 'updateship.php',   
				data: $('form').serialize(),
				success: function (data) {

	  $('#regiterbtn').prop('disabled',false);
	  $('#regiterbtn').html('Update');

	  $("#show_message").html(data);
				  
				}
			  });

	}
	</script>
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="vendors/scripts/steps-setting.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
