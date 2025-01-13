<?php
session_start();
include "../../include/connection.php";

// Login Login Function

if(isset($_POST['email'])) {
	$email = $_POST['email'];
    $password = $_POST['password'];
	$logindirectly = newlogin($email, $password);
	
$query_user = "SELECT * FROM customers WHERE email='$email'";
$user_result = mysqli_query($conn,$query_user);
$row =  mysqli_fetch_array($user_result, MYSQLI_BOTH);
$email =$row['email'];
$status =$row['status'];

if($logindirectly){
     
	    
				echo '<div class="alert alert-success text-center">Successfully logged in!</div>';
						echo '<script>window.setTimeout(function() {window.location.href = "index.php";}, 1000);</script>';
						
			}else{ 
    echo '<div class="alert alert-danger text-center">Email or Password is incorrect!</div>';
}
}
		
function newlogin($email, $password){ 
	global $conn;
	$securepass = $password;
	$getusers = mysqli_query($conn, "SELECT * FROM `customers` WHERE `email`='$email' AND `password` = '$securepass'");
   if (mysqli_num_rows($getusers) > 0) {
		$users = mysqli_fetch_assoc($getusers); 
		$_SESSION['id'] = session_id();
        $_SESSION['email'] = $users['email'];
		$mainID = $_SESSION['email'];
		return TRUE;
	}else {
		return false;	
	}
}

