<?php

$Name = $_POST['Name'];
$email = $_POST['email'];
$Bookname = $_POST['Bookname'];
$author = $_POST['author'];
$phone = $_POST['phone'];



if ( !empty($Name) || !empty($email)  || !empty($Bookname) || !empty($phone) || !empty($author))
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


  $sql = "INSERT Into borrow (Name, email, Bookname, author, phone) values(?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssss", $Name, $email, $Bookname, $author, $phone);
  $stmt->execute();


 echo "Details inserted successfully, a lender will contact when the book is available";}
 ?>
 <html>
 <head><title="success"></title>
   <style>
   body {background:url("rows-books-library_73152-2680.jpg");
        background-size:cover;}
    
    a{
      font-size: 120%;
      text-align: center;
    }
  

   </style>
 </head>
 <body>
   <br><br>
   <a href=index.php>Go to previous page</a>
 </body>
 </html>
