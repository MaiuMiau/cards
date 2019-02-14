<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>List</title>
</head>

<body>
<p>moro</p>
<?php
session_start();
if($_SESSION['username'] == 'username') {
 include "connect.php";
 print("<html>");
 $conn = connect_db();
 $sql = "SELECT * FROM Addresses";
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 echo $row["id"] . " ";
 echo $row["name"] . " ";
 echo $row["street_address"] . " ";
 echo $row["zip"] . " ";
 echo $row["city"] . " ";
 echo $row["state"] . " ";
 echo $row["country"] . " ";
ecco "<a href=\"delete.php?id=" . $row["id"] . "\">DEL</a>";
 print("<br>");
 } else {
 echo "0 results";
 }
 print("</html>");

 close($conn);

}
?>


