<?php
$Name = $_POST['Name'];
$email = $_POST['email'];
$Bookname = $_POST['Bookname'];
$author = $_POST['author'];
$phone = $_POST['phone'];
$category = $_POST['category'];

if ( !empty($Name) || !empty($email)  || !empty($Bookname) || !empty($phone) || !empty($category) || !empty($author))
{
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "calipso";
    //create connection

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
  $sql = "INSERT Into lender (Name, email, Bookname, author, phone, category ) values(?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssss", $Name, $email, $Bookname, $author, $phone, $category);
  $stmt->execute();
 echo "Details inserted successfully, a borrower will contact you soon";}
 ?>

 <html>
 <head><title="success"></title>
   <style>
   body {background:url("rows-books-library_73152-2680.jpg");
        background-size:cover;}
   a{ font-size: 50px;
      text-decoration: none;
      text-align: center;
     }
   </style>
 </head>
 <body>
   <br><br>
   <a href=index.php>Go to Home</a>
 </body>
 </html>

