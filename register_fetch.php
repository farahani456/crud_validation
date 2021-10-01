<?php
include_once("config.php");	
if(isset($_POST['register'])){
	$email = $_POST['email'];
	$password=$_POST['password'];
	$password=MD5($password);
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	
	$sql = "SELECT * FROM users WHERE email='$email'"; 
	$result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
	$count = mysqli_num_rows($result); 
	
	if ($count>0){
		$error="Email already exist. Please use different email or login if you already have an account";
	}else{
	$query = "INSERT INTO users(email, password, name, gender, age) 
				VALUES('$email', '$password', '$email','$gender','$age')";
	mysqli_query($connect, $query) or die(mysqli_error($connect));
	header('location:index.php');
	}
	}
?>