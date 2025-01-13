<?php

    $db_host = "localhost";
  	$db_user = "geomeohn_dn";
  	$db_pass = "Emmanuel261..";
  	$db_name = "geomeohn_airexpress";


$con =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if(mysqli_connect_error()){
		echo 'connect to database failed';
	}

$conn = $con;
date_default_timezone_set('Africa/Lagos');
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
         $url = "https://";
    else
         $url = "http://";
$url.= $_SERVER['HTTP_HOST']."/";
$sign = "&#8358;";
$xrate = "1";

$ss=mysqli_query($conn,"select * from settings");
$subm=mysqli_fetch_array($ss);

$id=$subm['id'];
$sitename=$subm['sitename'];
$siteurl=$subm['siteurl'];
$adminemail=$subm['adminemail'];
$maintain=$subm['maintenance']; 
$siteaddress=$subm['address']; 

?>