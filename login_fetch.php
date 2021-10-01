<?php
include "config.php";


if (isset($_POST['email']) and isset($_POST['password'])){
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
	$query ="SELECT * FROM users WHERE email='$email' and password='$password'";
	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
	$res = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);
	
	if ($count > 0){
		
		$_SESSION['email'] = $email;
		$_SESSION['id'] = $res['id'];
		header('location:account_page.php');
		
	}else{
		$error="Email or password is wrong. Haven't registered yet?";
		$err="yes";
	}

}
?>