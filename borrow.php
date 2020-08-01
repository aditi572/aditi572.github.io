<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Calipso Bookstore</title>
      <link rel="stylesheet" href="forms.css">
      <meta name="viewport" content="width-device-width">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="login-box">
    	<h2>Borrow Details</h2>
      <form action="process2.php" method="POST">
        <div class="user-box">
          <label for = "Name"></label>
          <input type = "text" name= "Name" required=" " placeholder="Name"><br/>
        </div>
        <div class="user-box">
          <label for = "Email"></label>
          <input type = "email" name="email"  required=" " placeholder="E-mail"><br/>
        </div>
        <div class="user-box">
          <label for = "Book name"></label>
          <input type = "text" name="Bookname" required=" " placeholder="Book Name"><br/>
        </div>
        <div class="user-box">
          <label for = "Author"></label>
          <input type = "text" name="author" required=" " placeholder="Author"><br/>
        </div>
        <div>
          <div class="user-box">
          <label for ="phone"></label>
          <input type = "text" name="phone" required=" " placeholder="Phone Number"><br/>
        </div>

        <button type = "submit" name="Submit">Submit</button> </div>
      </div>
       </form>
      </body>
      </html>
