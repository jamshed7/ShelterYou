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

<head>
  <strong>Return a list of all INQUIRIES for a specific ANIMAL by all User PROFILEs</strong>
</head>

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
   <input type="integer" name="animal-id" placeholder="Enter Animal ID Here" />
   <input type="submit" name="submit" />
 </form>

</br></br>

<?php
 // Check if the form is submitted
 if ( isset( $_POST['submit'] ) )
 {
   // retrieve the form data by using the element's name attributes value as key
   $animal_id = $_POST['animal-id'];

   $query = 'SELECT * FROM INQUIRY WHERE Animal_Info='.$animal_id.'';

   if($result = $conn->query($query) )
   {
     echo'<table>';
     echo '<tr>';
       echo '<th>Animal ID</th>';
       echo '<th>Question</th>';
     echo '</tr>';

     while( $row = mysqli_fetch_array($result) )
     {
       echo '<tr>';
       echo '<td>'.$row["Animal_Info"].'</td>';
       echo '<td>'.$row["Inquiry_question"].'</td>';
       echo '</tr>';
     }
       echo '</table>';

   }
 }
?>




</html>
