<?php
$localhost="localhost";
$username="root";
$password="";
$database="crud_validation";

$connect=mysqli_connect($localhost,$username,$password,$database);

if($connect->connect_error){
	die("Connection failed: ". $connect->connect_error);
}else{
	session_start();
}
 ?>