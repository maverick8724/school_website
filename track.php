<?php
 include 'include/connection.php';
?>
<!doctype html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
<title>Global Logistics - A Logistic Cargo Services</title>
<meta name="author" content="Mannat Studio">
<meta name="description" content="Global Logistics is a Logistic and Cargo related services.">
<meta name="keywords" content="Global Logistics, business, cargo, chain supply, company, corporate, expedition, freight, logistics, packaging, services, shipping, transport, transportation, trucking, warehousing">

<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

<link href="assets/css/theme-plugins.min.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<link href="assets/css/responsive.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/fonts/font-awesome/css/font-awesome.css">

</head>
<body>


<header class="header-one wow fadeInDown">
<div class="d-flex align-items-center text-md-left top-bar">
<div class="container px-0">
<div class="row align-items-center">
<div class="col d-flex">
<div class="top-text">
<small class="txt-black">Address</small>
254 Street Avenue, LA US
</div>
<div class="top-text">
<small class="txt-black">Email Us</small>
<a href="#"><span class="__cf_email__">support@globallogistics.efcu.pro</span></a>
</div>
<div class="top-text">
<small class="txt-black">Phone Number</small>
+88 (0) 202 0000 001
</div>
</div>
<div class="col-md-auto d-flex">

<div class="dropdown d-inline-flex lang-toggle">
<a href="#" class="dropdown-toggle btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
<img src="assets/images/us.svg" alt class="dropdown-item-icon">
<span class="d-inline-block d-lg-none">US</span>
<span class="d-none d-lg-inline-block">United States</span> <i class="icofont-rounded-down"></i>
</a>
<div class="dropdown-menu dropdownhover-bottom dropdown-menu-end" role="menu">
<a class="dropdown-item active" href="#">English</a>
<a class="dropdown-item" href="#">Deutsch</a>
<a class="dropdown-item" href="#">Español&lrm;</a>
</div>
</div>

<div class="d-inline-flex request-btn ms-2">
<a class="btn-theme icon-left bg-orange no-shadow d-none d-lg-inline-block align-self-center" href="#" role="button" data-bs-toggle="modal" data-bs-target="#request_popup"><i class="icofont-page"></i> Request Quote</a>
</div>
</div>
</div>
</div>
</div>

<nav class="header-fullpage navbar navbar-expand-lg nav-light">
<div class="container text-nowrap bdr-nav px-0">
<div class="d-flex mr-auto">
<a class="navbar-brand rounded-bottom light-bg" href="index-2.html">
<img src="assets/images/logo_white.png" alt>
</a>
</div>

<span class="order-lg-last d-inline-flex request-btn">
<a class="nav-link" href="#" id="search_home"><i class="icofont-search"></i></a>
</span>

<button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>


<div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="navbar-nav ms-auto mb-2 mb-md-0">
    <li class="nav-item dropdown">
    <a class="nav-link" href="#" >Home</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link" href="services.html" >Services</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link" href="about-us.html" >About Us</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link" href="contact-us.html" >Contact Us</a>
    </li>
</ul>

</div>
</div>
</nav>

</header>

    
	<!-- SLIDE SHOW COME IN HERE -->
	<div class="container" style="margin-top:0px; padding-top:0px; box-shadow:0px 0px 0px #000">
		<div class="row" style="border-top: solid #fff medium; border-bottom: solid #fff medium">
			
			<div class="col-md-12" style="padding-top:30px; padding-bottom:50px">
			<?php 

if(isset($_POST["tracker"])){

$tracker =$_POST["tracker"];

$query="SELECT * FROM tracks WHERE tracking_id='$tracker'"; 
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
$mode =$row['mode'];
$status =$row['status'];

if($result->num_rows == 1) {
?>             

	<div class="row"> 
            <div class="col-lg-8" style="overflow:auto"> 
                            
            <?php if($status=="Held"){echo'
                <div class="progress">
                	<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%; background-color:#a94442" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                </div>
				<div class="alert alert-danger" style="border-radius: 0px;" align="left"><h3><i class="fa fa-bell"></i> Package Update</h3> Your package is currently held at '.$location.' and will not be delivered if prompt action is not taking.</div>
            ';
                
            }elseif($status=="Taking off"){echo'
                <div class="progress mb-20">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%; background-color:#8a6d3b" aria-valuenow="10" aria-valuemin="0" aria-valuemax="10"></div>
                </div>
				<div class="alert alert-warning" style="border-radius: 0px;" align="left"><h3><i class="fa fa-bell"></i> Package Update</h3> Your package has take off, you can stay connected to monitor the progress of you package. Best wishes.</div>
            ';
                
            }elseif($status=="On the way"){echo'
                <div class="progress mb-20">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width:60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
                </div>
				<div class="alert alert-info" style="border-radius: 0px;" align="left"><i class="fa fa-bell"></i>Your package is closer to you, you will be communicated to as we approach your destination.</div>
            ';}elseif($status=="Delivered"){echo'
            <div class="progress mb-20">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width:100%; background-color:green" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
				<div class="alert alert-success" style="border-radius: 0px;" align="left"><i class="fa fa-bell"></i>Congratulations! your package arrived safely.</div>
            ';}
			?>	
				
			<h2>Online Parcel Tracking: <?=$tracking_id?></h2>
			<p style="text-align:justify">Parcel Tracking Details and Information</p>
			
			  <div id="tracking" class="tracking_form formElements" style="padding:3px; float:none;">

<br>  
  
    
  <table width="100%" border="1" cellpadding="4" cellspacing="4" style="box-shadow:0px 0px 1px #000">
  <tbody>
            
<tr>
    <td colspan="3" style="background-color:#fe8704; padding:6px; padding-left:20px; color:#fff; font-weight:bold">PARCEL INFORMATION FOR TRACKING NUMBER:- 
	<?=$tracking_id;?></td>
  </tr>
      <tr>
    <td width="100%" colspan="3">
	
<table width="100%" border="1" cellpadding="2">
  <tbody>
  <tr>
    <td width="33.33%" style="color:#fe8704; padding-left:10px; padding-right:10px">ORIGIN:</td>
    <td style="font-weight:bold; padding-left:10px; padding-right:10px"><?=$s_address;?><hr></td>
   </tr>
   
  <tr>
    <td width="33.33%" style="color:#fe8704; padding-left:10px; padding-right:10px">DESTINATION:</td>
    <td style="font-weight:bold; padding-left:10px; padding-right:10px"><?=$r_address;?> <hr></td>
  </tr>
 
  <tr>
    <td width="33.33%" style="color:#fe8704; padding-left:10px; padding-right:10px">CURRENT LOCATION:</td>
    <td style="font-weight:bold; padding-left:10px; padding-right:10px"><?=$location;?> 
  </tr>
</tbody>
</table>
	
	</td>
  </tr>
    

  
  
  
  <tr>
    <td width="100%" colspan="3" style="font-weight:bold; padding-left:10px; padding-right:10px; color:#fe8704"><br>PARCEL INFORMATION<hr></td>
  </tr>
   <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">PACKAGE(S):</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$consignment;?></td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">WEIGHT:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$weight;?></td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">DIMENSION:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$dimension;?></td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">MODE OF SHIPMENT:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$mode;?></td>
  </tr>
  
     
  <tr>
    <td width="100%" colspan="3" style="font-weight:bold; padding-left:10px; padding-right:10px; color:#fe8704"><br>PARCEL TRACKING ID<hr></td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">TRACKING NUMBER:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$tracking_id;?></td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">DATE/TIME OF DELIVERY:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$delivery_date;?></td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">FREIGHT CHARGES:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$fees;?></td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">DELIVERY STATUS:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$status;?></td>
  </tr>
  
  

  <tr>
    <td width="100%" colspan="3" style="font-weight:bold; padding-left:10px; padding-right:10px; color:#fe8704"><br>SENDER'S INFORMATION<hr></td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">SENDER NAME:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$s_name;?> </td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">SENDER ADDRESS:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$s_address;?> </td>
  </tr>
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">SENDER PHONE:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$s_phone;?> </td>
  </tr>
  
  <tr>
    <td width="100%" colspan="3" style="font-weight:bold; padding-left:10px; padding-right:10px; color:#fe8704"><br>RECEIVER'S INFORMATION<hr></td>
  </tr>
  
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">RECEIVER NAME:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"><?=$r_name;?></td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">RECEIVER ADDRESS:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"> <?=$r_address;?></td>
  </tr>
  
  <tr>
	<td width="4%" style="text-align:center">•</td>
    <td width="20%" style="padding-left:6px">RECEIVER PHONE:</td>
    <td width="76%" style="padding-left:6px; font-weight:bold"> <?=$r_phone;?></td>
  </tr>
  

  	
</tbody></table>
	
	</div>
</div>
	<!-- IMAGE UPLOAD -->
	<div class="col-lg-4" style="padding-top:30px"><img src="assets/images/forklift_Image.png" class="img-responsive" /></div>
	
	</div>
			
		</div>
	</div>
	</div>

<?php }else{?>
    <div class="alert alert-danger" style="border-radius: 0px;" align="left"><h3><i class="fa fa-bell"></i> Error!</h3> There is no record found for your tracking ID, Please, double-check and try again.</div>
<?php }
}?>
	
	
<?php include"footer.php";?>
</html>