<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login at Calipso</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width-device-width">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
  <div class="login-box">
  	<h2>Login</h2>


  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="user-box">
  		<label for="username"></label>
  		<input type="text" name="username" placeholder="Username" >
  	</div>
  	<div class="user-box">
  		<label for="password"></label>
  		<input type="password" name="password" placeholder="Password">
  	</div>
  	<div class="user-box">
  		<button type="submit" name="login_user">Login</button>
  	</div>
  	<p>
  		Not a member yet? <a href="register.php">Sign up</a>
  	</p>
  </div>
  </form>
</body>
</html>
