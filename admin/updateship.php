<?php 
include '../include/connection.php';

if(isset($_POST["s_name"])){

$update =$_POST['update'];
$s_name =$_POST['s_name'];
$s_address =$_POST['s_address'];
$s_phone =$_POST['s_phone'];
$r_name =$_POST['r_name'];
$r_address =$_POST['r_address'];
$r_phone =$_POST['r_phone'];
$r_email =$_POST['r_email'];
$consignment =$_POST['consignment'];
$weight =$_POST['weight'];
$dimension =$_POST['dimension'];
$location =$_POST['location'];
$fees =$_POST['fees'];
$tracking_id =$_POST['tracking_id'];
$takeoff_date =$_POST['takeoff_date'];
$delivery_date =$_POST['delivery_date'];
$status=$_POST['status'];


$query = mysqli_query($conn, ("UPDATE tracks SET s_name='$s_name',s_address='$s_address',s_phone='$s_phone',r_name='$r_name',r_address='$r_address',r_phone='$r_phone',r_email='$r_email',consignment='$consignment',weight='$weight', dimension='$dimension',location='$location',fees='$fees',tracking_id='$tracking_id',takeoff_date='$takeoff_date',delivery_date='$delivery_date',status='$status' WHERE id='$update'"));
 if ($query == TRUE) {
    echo '<div class="alert alert-success text-center">Consignment updated Successful!</div>';
}else{echo '<div class="alert alert-danger text-center">Registration Error!</div>';
}
}
?>    