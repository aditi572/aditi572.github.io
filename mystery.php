<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>  html {
      height: 100%;}
    .header {
    text-align: left;
    padding: 20px;
    font-size: 100%;
  }
    body {
      margin:0;
      padding:0;
      font-family: sans-serif;
      background-image: url('https://images.pexels.com/photos/1287142/pexels-photo-1287142.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
      background-size:cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
  }
    tr td{ 
        margin-left: 30px;
        color: black;
        font-family:Didot;
        font-size: 100%;
      }
      h1{
        text-align: center;
      }
       #one{
    margin: 5px;
    border:2px groove black;
    padding: 5px;
    width: 8%;
    display: block;
    position: absolute;
    top: 75px !important;
    left: 100px !important;
    text-decoration: none;
    }

  </style>
</head>
<body>
  <div class="header"><h1>Mystery</h1></div>

  <table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> Title </th>
<th> Author </th>
</tr>
<div id="one">
          <a href="books.php">Back to Home</a>
        </div>
<?php
include("DBConnection.php");
$sql = "SELECT Bookname,author FROM lender INNER JOIN category ON category=c_name WHERE c_id=3";
$result = mysqli_query($db,$sql) or die( mysqli_error($db));
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["Bookname"] . "</td><td>" . $row["author"] . "</td></tr>" . "<br>";
  }
} else {
  echo "0 results";
}
 ?>
</body>
</html>
