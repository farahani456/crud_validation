<?php 
if(!empty($_SESSION['id'])){
	header('location:index.php');
}else{
	$sql ="SELECT * FROM users WHERE id='$id'";
	$result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
	$res = mysqli_fetch_array($result);
}
?>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="cover3">
<div class="container">

<center><h1>Registration</h1></center>
<p class="error"><?php if(!empty($error)){ echo $error;}?></p>
<div class="input-group"><label for="email">Email</label><input type="email" name="email" id="email" value="<?php echo $res['email'];?>" readonly /></div>
<div class="input-group"><label for="name">Name</label><input type="text" name="name" id="name" value="<?php echo $res['name'];?>" readonly /></div>
<div class="input-group"><label for="gender">Gender</label><input type="text" name="gender" id="gender" value="<?php echo $res['gender'];?>" readonly /></div>
<div class="input-group"><label for="age">Age</label><input type="number" name="age" id="age" value="<?php echo $res['age'];?>" readonly /></div>
<div class="input-group"><center><button type="submit" name="register">Edit</button></center></div>


</div>
</body>
</html>