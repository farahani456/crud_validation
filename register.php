<?php include "register_fetch.php";?>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="cover2">
<div class="container">
<form method="POST" name="registerform" onsubmit="return validateRegister()" action="register.php">
<center><h1>Registration</h1></center>
<p class="error"><?php if(!empty($error)){ echo $error;}?></p>
<div class="input-group"><label for="email">Email</label><input type="email" name="email" id="email" placeholder="Enter your email" /></div>
<div class="input-group"><label for="password">Password</label><input type="password" name="password" id="password" Placeholder="Enter your password"/></div>
<div class="input-group"><label for="name">Name</label><input type="text" name="name" id="name" Placeholder="Enter your name"/></div>
<div class="input-group"><label for="gender">Gender</label><select><option value="male">Male</option><option value="female">Female</option></select></div>
<div class="input-group"><label for="age">Age</label><input type="number" name="age" id="age" Placeholder="Enter your age in numbers"/></div>
<div class="input-group"><center><button type="submit" name="register">Register</button></center></div>
<div class="input-group"><center><a href="index.php" name="login">Already have an account? Sign in here</a><center></div>
<form>
</div>
</body>
</html>

<script>
function validateLogin() {
  let email = document.forms["registerform"]["email"].value;
  let password = document.forms["registerform"]["password"].value;
  let name = document.forms["registerform"]["name"].value;
  let age = document.forms["registerform"]["age"].value;
  if (email == "") {
    alert("Please enter your email");
    return false;
  }
  if (password == "") {
    alert("Please enter your password");
    return false;
  }
  if (name == "") {
    alert("Please enter your name");
    return false;
  }
  if (age == "") {
    alert("Please enter your age");
    return false;
  }
}
</script>