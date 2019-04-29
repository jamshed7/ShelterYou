<html>
<head><title>Add Animal</title></head>
<body> 

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "shelter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Animal_ID = $_POST['Animal_ID'];
$Name = $_POST['Name'];
$Age = $_POST['Age'];
$Size = $_POST['Size'];
$Breed = $_POST['Breed'];
$Color = $_POST['Color'];
$Posted_date = $_POST['Posted_date'];
$Description = $_POST['Description'];
$Is_available = $_POST['Is_available'];
$Num_of_likes = $_POST['Num_of_Likes'];


$sql = "INSERT INTO animal(Animal_ID, Animal_type, Name, Age, Size, Breed, Color, Posted_date, Description, Is_available, Num_of_likes) VALUES ('$Animal_ID','$Animal_type','$Name','$Age','$Size','$Breed','$Color','2019.02.18 12:00:00','$Description','$Is_available',Null)";

$result = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>

</html>


