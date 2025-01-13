<?php include 'include/header.php';?>
		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="row pb-10">
					<div class="col-md-12 mb-20">
						<div class="card-box height-100-p pd-20 min-height-200px" data-bgcolor="#455a64">
							<div class="d-flex justify-content-between pb-20 text-white">
								<div class="icon h1 text-white">
									<i class="fa fa-google-wallet" aria-hidden="true"></i>
								</div>
								<div class="font-14 text-right">
									<div><i class="icon-copy ion-arrow-up-c"></i> <?=date('D, d-m-Y')?></div>
									<div class="font-12">Online</div>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-end">
								<div class="text-white">
									<div class="font-14">Quotes</div>
									<div class="font-30 weight-700"> <?=$english_format_number = number_format($balance);?></div>
								</div>
								<div class="max-width-150">
									<div id="appointment-chart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>

				<div class="card-box pb-10">
					<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Consignment</th>
										<th>Sender Name</th>
										<th>Receiver Name</th>
										<th>Location</th>
										<th class="datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody>
<?php $query="SELECT * FROM tracks ORDER BY id"; 
$result = mysqli_query($conn,$query);
while($row =  mysqli_fetch_array($result, MYSQLI_BOTH)){

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
									<tr>
										<td class="table-plus"><?=$consignment;?></td>
										<td><?=$s_name;?></td>
										<td><?=$r_name;?></td>
										<td><?=$location;?></td>
										<td>
											<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													
													<a class="dropdown-item" href="updateconsignment.php?update=<?=$id?>"><i class="dw dw-edit2"></i> Edit</a>
													<a class="dropdown-item" href="deleteconsignment.php?delete=<?=$id?>"><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
			</div>
		</div>
		
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="vendors/scripts/dashboard3.js"></script>
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
