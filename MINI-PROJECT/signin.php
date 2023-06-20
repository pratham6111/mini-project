<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<style>
	body {
  background-image: url(https://img.freepik.com/premium-photo/men-fashion-clothing-set-isolated-yellow-background-business-clothes-concept_107612-315.jpg?w=2000);
  font-family: Arial, sans-serif;
  background-size:  100%;
}
.text p{
text-align:center;
font-family:cursive;
background-color:aquamarine;
text-transform:capitalize;
}
</style>
<body>
	<div class="text">
		<p>Welcome to men's fashion</p>
	</div>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="signin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Don't have an account? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>