<?php 
session_start();
if(!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}else{
include "../include/connection.php";
$email = $_SESSION['email'];

$query_user = "SELECT * FROM customers WHERE email='$email'";
$user_result = mysqli_query($conn,$query_user);
$row =  mysqli_fetch_array($user_result, MYSQLI_BOTH);
$fname =$row['fname'];
$lname =$row['lname'];
$balance =$row['balance'];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title><?=$sitename;?></title>

		<!-- Site favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png"/>
		<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png"/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/jquery-steps/jquery.steps.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		
		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				
				
			</div>
			<div class="header-right">
				
				
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">
								<img src="vendors/images/photo1.jpg" alt="" />
							</span>
							<span class="user-name"><?=$fname;?> <?=$lname;?></span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
						
							<a class="dropdown-item" href="cpass.php"
								><i class="dw dw-logout"></i> Change Password</a
							><a class="dropdown-item" href="login.php"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		
		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					<?=$sitename;?>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
					<li class="dropdown">
							<a href="index.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-truck"></span
								><span class="mtext">Dashboard</span>
							</a>
							
						</li>
						<li class="dropdown">
							<a href="shipnow.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-truck"></span
								><span class="mtext">Create Consignment</span>
							</a>
							
						</li>
						<li class="dropdown">
							<a href="viewconsignment.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-truck"></span
								><span class="mtext">View Consignment</span>
							</a>
							
						</li>
						<li class="dropdown">
							<a href="cpass.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-truck"></span
								><span class="mtext">Change Password</span>
							</a>
							
						</li>
						<li class="dropdown">
							<a href="logout.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-truck"></span
								><span class="mtext">Logout</span>
							</a>
							
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>
