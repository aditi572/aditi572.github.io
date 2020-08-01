<!DOCTYPE HTML>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<style>
         input[type=text] {
  width: 130px;
  height:30px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
 
}

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
  width: 50%;
  
}
body{
  background-image: url("https://images.pexels.com/photos/1287142/pexels-photo-1287142.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

h1{
  text-align: center;
  color: #ffffff;
  text-transform: uppercase;
  font-size: 250%;
  font-family:Jokerman,Arial;
  letter-spacing: 1rem;
}
#one{
    margin: 5px;
    border:2px groove black;
    padding: 5px;
    width: 5%;
    display: block;
    position: absolute;
    top: 75px !important;
    left: 0px !important;
    }

a{ color: black; 
    }

	</style>
<form action = "searchb.php" method="post">
<br>
<center><h1>Calipso Details</h1></center>
<center><h2>Enter the Author/Title of the book to search: </h2><br>
<input type="text" name="searchb" size="48">
<br></br>
<input type="submit" value="submit">
<input type="reset" value="Reset">

</center>
<br>
</form>
<div id="one">
<a href="http://localhost/dbms/index.php">Go back </a>to last page</div>
<?php include('displayborrow.php') ?>
</body>
</html>