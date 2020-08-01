<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register at Calipso</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="login-box">
  	<h2>Register</h2>
    
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="user-box">
  	  <label for="username"></label>
  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
  	<div class="user-box">
  	  <label for="email"></label>
  	  <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
  	</div>
  	<div class="user-box">
  	  <label for="password_1"></label>
  	  <input type="password" name="password_1" placeholder="Password">
  	</div>
  	<div class="user-box">
  	  <label for password_2></label>
  	  <input type="password" name="password_2" placeholder="Confirm Password">
  	</div>
  	<div>
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </div>
  </form>
</body>
</html>
