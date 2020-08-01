<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: bookstore.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<style>
html{background: url("https://thewallpaper.co/wp-content/uploads/2016/10/Desktop-Book-HD-Backgrounds-hd-wallpapers-background-photos-windows-apple-artworks-high-definition-download-pictures-1920x1080-768x432.jpg");
     background-size: cover;
      }

body{ font-family: Palatino body copy;

      color: white;}
p
{ position: relative;
  font-family: Palatino;}
.header{
  text-align: center;
  color: #ffffff;
  text-transform: uppercase;
  text-decoration: none;
  font-size: 200%;
  font-family:Palatino header;
  margin-top: 55px;}

.content{ font-size: 150%; margin-left:40px}


 a {
  position: relative;
  display: inline-block;
  font-weight: bolder;
  padding: 10px 10px;
  color: #ffff99;
  font-size: 20px;
  text-decoration: none;
  text-transform: small-caps;
  overflow: hidden;
  transition: .5s;
  margin-top: 10px;
  text-align: center;
}

.button:hover {
text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}

a:hover{text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
transition: all 0.4s ease 0s;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);}

#bottom {
  position: absolute;
  bottom: 20px;
  left: 30px;
  
}

</style>
<div class=header>
	<h2>Calipso Bookstore</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
    </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?>!</strong></p>
  <div class="login-box">
    <div class="button">  <a href="search.php">Search a Book to Borrow</a> </div>
    <div class="button">  <a href="searchb.php">Search a Borrower for your book</a> </div>
    <div class="button">  <a href="lender.php">Add a book to lend</a> </div>
    <div class="button">  <a href="borrow.php">Add a book request to borrow</a> </div></div>

    <div id="bottom"><p><a href="books.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>
