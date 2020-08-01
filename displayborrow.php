<?php
include("DBConnection.php");
if (isset($_POST['searchb']))
{
  $searchb=0;
$searchb = $_REQUEST["searchb"];

if($searchb!='NULL')
{$query = "SELECT Bookname, author, Name, email, phone FROM borrow WHERE author LIKE '%$searchb%' OR Bookname LIKE '%$searchb%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0)

{
?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> Book Title </th>
<th> Author </th>
<th> Name </th>
<th> E-Mail </th>
<th> Phone Number </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Bookname"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["Name"];?> </td>
<td><?php echo $row["email"];?> </td>
<td><?php echo $row["phone"];?> </td>
</tr>
<?php
}
}
else
{echo "<center>No books found. </center>" ;} } }
?>
</table>
</body>
</html>
