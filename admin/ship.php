<?php 
include '../include/connection.php';

if(isset($_POST["s_name"])){

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
$mode =$_POST['mode'];
$status=1;


$query = mysqli_query($con,"INSERT INTO tracks (`s_name`,`s_address`,`s_phone`,`r_name`,`r_address`,`r_phone`,`r_email`,`consignment`,`weight`, `dimension`, `location`,`mode`, `fees`,`tracking_id`,`takeoff_date`,`delivery_date`) 
VALUES ('$s_name','$s_address','$s_phone','$r_name','$r_address','$r_phone','$r_email','$consignment','$weight', '$dimension','$location','$mode','$fees','$tracking_id','$takeoff_date','$delivery_date')");
 if ($query == TRUE) {
    echo '<div class="alert alert-success text-center">Consignment submitted Successful!</div>';
}else{echo '<div class="alert alert-danger text-center">Registration Error!</div>';
}
}
?>    