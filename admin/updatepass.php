<?php
include "../include/connection.php";

if(isset($_POST['old_pass'])){

$email = $_POST['email'];
$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];
$cnew_pass = $_POST['cnew_pass'];

$result1 = mysqli_query($con, "SELECT * FROM customers WHERE email = '$email'");
$row =  mysqli_fetch_array($result1, MYSQLI_BOTH);
$pw = $row['password'];

if($pw != $old_pass){
	echo '<div class="alert alert-danger text-center">Old Password Not Correct!</div>';
	exit(); 
} 

if($new_pass != $cnew_pass){
	echo '<div class="alert alert-danger text-center">Confirm Password Not Match!</div>';
	exit(); 
} 

$status=mysqli_query($conn, "UPDATE customers SET password='$new_pass' WHERE email = '$email'");

if($status){

     	echo '<div class="alert alert-success text-center">Password changed successfully!</div>';
    }
else{ 	echo '<div class="alert alert-danger text-center">Failed</div>';
}
}
