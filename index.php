<?php include "login_fetch.php";?>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="cover1">
<div class="container">
<form method="POST" name="loginform" onsubmit="return validateLogin()" action="index.php">
<center><h1>Login <?php echo $_SESSION['id'];?></h1></center>
<p class="error"><?php if(!empty($error)){ echo $error;}?></p>
<div class="input-group"><label for="email">Email</label> <input type="email" name="email" id="email" placeholder="Enter your email" /></div>
<div class="input-group"><label for="password">Password</label> <input type="password" name="password" id="password" Placeholder="Enter your password"/></div>
<div class="input-group"><center><button type="submit" name="login">Login</button></center></div>
<div class="input-group"><center><a href="register.php" name="register">Don't have an account yet? Register here</a><center></div>
<form>
</div>
</body>
</html>

<script>
function validateLogin() {
  let email = document.forms["loginform"]["email"].value;
  let password = document.forms["loginform"]["password"].value;
  if (email == "") {
    alert("Please enter your email");
    return false;
  }
  if (password == "") {
    alert("Please enter your password");
    return false;
  }
}
</script>