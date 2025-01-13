<?php include 'include/header.php';?>

<div class="main-container">
<div class="pd-ltr-20 xs-pd-20-10">



			<div class="pd-20 card-box mb-30">
						
						<div class="wizard-content">
						<form  onsubmit="registerajax()" class=" wizard-circle wizard">
							<div class="clearfix">
							<h4 class="text-blue h4">Consignment Details</h4>
						 	</div><hr>
								<section>
									<div class="row">
									<div class="col-md-6">
											<div class="form-group">
												<label>Consignment :</label>
												<input type="text" name="consignment" class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Weight :</label>
												<input type="text" name="weight" class="form-control" />
											</div>
										</div><div class="col-md-6">
											<div class="form-group">
												<label>Dimension :</label>
												<input type="text" name="dimension" class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Charges :</label>
												<input type="text" name="fees" class="form-control" />
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
												<input type="text" name="s_name" class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Sender phone :</label>
												<input type="text" name="s_phone" class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Sender email :</label>
												<input type="email" name="s_email" class="form-control" />
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Sender Address :</label>
												<textarea name="s_address" class="form-control"></textarea>
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
												<input type="text" name="r_name" class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Receiver phone :</label>
												<input type="text" name="r_phone" class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Receiver email :</label>
												<input type="email" name="r_email" class="form-control" />
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Receiver Address :</label>
												<textarea name="r_address" class="form-control"></textarea>
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
											<?php
											function coupon($l){
											$coupon = "KSF-".substr(str_shuffle(str_repeat('0123456789',$l-2)),0,$l-2);
											//$coupon = substr(str_shuffle(str_repeat('0123456789',$l-2)),0,$l-2);

											return $coupon;
											}
											?>
											<input type="text" name="tracking_id" value="<?= coupon(12); ?>" readonly class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Take-off date :</label>
												<input type="text" name="takeoff_date" class="form-control"/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Delivery date :</label>
												<input type="text" name="delivery_date" class="form-control"/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Current Location :</label>
												<input type="text" name="location" class="form-control"/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Mode of shipment :</label>
												<input type="text" name="mode" class="form-control"/>
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
				url: 'ship.php',   
				data: $('form').serialize(),
				success: function (data) {

	  $('#regiterbtn').prop('disabled',false);
	  $('#regiterbtn').html('Submit');

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
