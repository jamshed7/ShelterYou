<!DOCTYPE html>
<html lang="en">
<body>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ANIMAL_SHELTER";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
  echo "Connection made!";
}

$query = "SELECT Name FROM ANIMAL";

if($result = $conn->query($query) )
{
  while( $row = mysqli_fetch_array($result) )
  {
    echo '<a href="single-product.html">';
    echo '<img src="assets/images/item-01.jpg" alt="Item 1">';
    echo "<div>";
    echo "<h4>".$row["Name"]."</h4>";
    echo "<h6>Is Available</h6>";
    echo "</div>";
    echo '</a>';

  }
}
else{
  echo "0 results";
}
 ?>

</body>
</html>
