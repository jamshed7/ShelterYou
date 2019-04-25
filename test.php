<?php
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

$sql = "SELECT Password from PROFILE WHERE Username = '".$_POST["username"]."';";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $array = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //echo $array['Password'];
    //echo $_POST["password"];
    if($_POST["password123"] == $array["Password"]){
        session_start();
        $_SESSION['loggedIn'] = "yes";
        header('Location: products.php');
        exit();
    }
    else{
        var_dump("FUCK");
    }
}else{
    echo "fuck";
}
?>