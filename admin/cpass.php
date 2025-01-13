<?php include 'include/header.php';?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Change Password</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->

                                <div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Change Password</h4>
							</div>
						
					</div>
					<span id="show_message"></span>
		        	<form  onsubmit="cpassajax()" novalidate>
							
						 <input type="hidden"  name="email" value="<?=$email;?>">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Old Password</label>
							<div class="col-sm-12 col-md-10">
							 <input type="password"  class="form-control" placeholder="Enter Old Password" name="old_pass">
                             </div>
						</div>
					    <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">New Password</label>
							<div class="col-sm-12 col-md-10">
							 <input type="password"  class="form-control" placeholder="Enter Old Password" name="new_pass">
                             </div>
						</div>		
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Confirm New Password</label>
							<div class="col-sm-12 col-md-10">
							 <input type="password"  class="form-control" placeholder="Enter Old Password" name="cnew_pass">
                             </div>
						</div>
					
					 	<button type="submit" id="updatebtn" class="btn btn-lg btn-primary btn-block">Update</button>
                  	
					</form>
			</div>
			<?php include'inc/footer.php';?>
		</div>
	</div>

    
    <!-- js -->
	<script>
	function cpassajax() {
	event.preventDefault();

	  $('#updatebtn').html('<span class="spinner-grow spinner-grow-sm"></span> Please Wait...');
		$('#updatebtn').prop('disabled',true);

			  $.ajax({
				type: 'POST',
				url: 'updatepass.php',   
				data: $('form').serialize(),
				success: function (data) {

	  $('#updatebtn').prop('disabled',false);
	  $('#updatebtn').html('Change Password');

	  $("#show_message").html(data);
				  
				}
			  });

	}
	</script>
	
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>