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
?>

<!DOCTYPE html>
<html lang="en">

<style>
  table {
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid orange;
    padding: 10px;
    text-align: left;
  }
</style>

 <form action="" method="post">
   <input type="integer" name="donator_id" placeholder="Enter Donator ID Here" />
   <input type="submit" name="submit" />
 </form>

</br></br>
<?php
 // Check if the form is submitted
 if ( isset( $_POST['submit'] ) )
 {
   // retrieve the form data by using the element's name attributes value as key
   $donator_id = $_POST['donator_id'];

   $query = 'SELECT * FROM Donation WHERE donator_id='.$donator_id.'';

   if($result = $conn->query($query) )
   {
     echo'<table>';
     echo '<tr>';
       echo '<th>Donated to Animal</th>';
       echo '<th>Donation Amount</th>';
     echo '</tr>';

     while( $row = mysqli_fetch_array($result) )
     {
       echo '<tr>';
       echo '<td>'.$row["Donatee_ID"].'</td>';
       echo '<td>'.$row["Donation_amount"].'</td>';
       echo '</tr>';
     }
       echo '</table>';

   }
 }
?>




</html>
