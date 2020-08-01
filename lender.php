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
      <h2>Lender Details</h2>
      <form action="process1.php" method="POST">
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
    <div class="user-box">
    <label for ="category"></label>
    <td>

     <select name="category" required>
      <option selected hidden value="">Select Category</option>
      <option value="Academics">Academics</option>
      <option value="biography">Biography</option>
      <option value="fiction">Fiction</option>
      <option value="mystery">Mystery</option>
      <option value="romance">Romance</option>
      <option value="non-fiction">Non-Fiction</option>
      <option value="Sci-fi">Sci-fi</option>

     </select>
<br/>
    </td>
    <br/>
  </div>

        <label></label>
        <button type = "submit" name="Submit" >Submit</button></div>
      </div>
       </form>
      </body>
      </html>

  <!--<table>

   <tr>

    <td>Name :</td>

    <td><input type="text" name="Name" required></td>

   </tr>

   <tr>

    <td>Password :</td>

    <td><input type="password" name="password" required></td>

   </tr>

    \<tr>

    <td>Gender :</td>

    <td>

     <input type="radio" name="gender" value="m" required>Male

     <input type="radio" name="gender" value="f" required>Female

    </td>

  </tr>

   <tr>

    <td>Email :</td>

    <td><input type="email" name="email" required></td>

   </tr>

   <tr>

    <td>Book name :</td>

    <td><input type="text" name="Bookname" required></td>

   </tr>

    <tr>

    <td>Book ID :</td>

    <td><input type="text" name="bookid" required></td>

  </tr>-->

  <!-- <tr>

    <td>Phone no :</td>

    <td>

     <select name="phoneCode" required>

      <option selected hidden value="">Select Code</option>

      <option value="977">977</option>

      <option value="978">978</option>

      <option value="979">979</option>

      <option value="973">973</option>

      <option value="972">972</option>

      <option value="974">974</option>

     </select>

     <input type="phone" name="phone" required>

    </td>

  </tr> -->

   <!--<tr>

    <td><input type="submit" value="Submit"></td>

   </tr>

 </table>-->

