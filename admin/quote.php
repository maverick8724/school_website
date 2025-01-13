<?php include 'include/header.php';?>

<div class="main-container">
<div class="pd-ltr-20 xs-pd-20-10">



			
				<div class="min-height-200px">
					
					<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Quick quote</h4>
							</div>
						
						</div>
						
					<table class="data-table table stripe hover nowrap">
						<thead>
							<tr>
								<th class="table-plus datatable-nosort">Q/ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Address</th>
								<th>State</th>
								<th class="datatable-nosort">Message</th>
							</tr>
						</thead>
						
						<tbody>
<?php $query="SELECT * FROM contact ORDER BY id"; 
$result = mysqli_query($conn,$query);
while($row =  mysqli_fetch_array($result, MYSQLI_BOTH)){

$id =$row['id'];
$name =$row['name'];
$address =$row['address'];
$phone =$row['phone'];
$state =$row['state'];
$email =$row['email'];
$message =$row['message'];
?>
							<tr>
								<td class="table-plus">WKS-0<?=$id?></td>
								<td><?=$name?></td>
								<td><?=$phone?></td>
								<td><?=$email?></td>
								<td><?=$address?></td>
								<td><?=$state?></td>
								<td><?=$message?></td>
							</tr>
<?php } ?>							
						</tbody>
					</table>
				</div>
			</div>
						
	<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<!-- buttons for Export datatable -->
		<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
		<!-- Datatable Setting js -->
		<script src="vendors/scripts/datatable-setting.js"></script>
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
