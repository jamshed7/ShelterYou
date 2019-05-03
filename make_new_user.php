<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Add a user!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">

  </head>
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
?>

  <body>

    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>Yayyyy</span>
          </div>
        </div>
      </div>
    </div>

      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Return to Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="animals.php">Animals
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Add a new user</h1>
            </div>
          </div>

          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="fName" type="text" class="form-control" id="fName" placeholder="Your first name..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="lName" type="text" class="form-control" id="lName" placeholder="Your last name..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="pNumber" type="text" class="form-control" id="pNumber" placeholder="Phone Number.." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="eMail" type="text" class="form-control" id="eMail" placeholder="Your email address..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="userName" type="text" class="form-control" id="userName" placeholder="Username..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="passWord" type="text" class="form-control" id="passWord" placeholder="Password..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="homeType" type="text" class="form-control" id="homeType" placeholder="Home Type..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="submit" class="button">CREATE USER!</button>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php $fName = $_POST["fName"]; ?>
<?php $lName = $_POST["lName"]; ?>
<?php $pNumber = $_POST["pNumber"]; ?>
<?php $eMail = $_POST["eMail"]; ?>
<?php $userName = $_POST["userName"]; ?>
<?php $passWord = $_POST["passWord"]; ?>
<?php $homeType = $_POST["homeType"]; ?>
<?php $d=strtotime("today");
$_date = date("Y-m-d h:i:s", $d); ?>
<!--INSERT INTO `PROFILE` (`Profile_ID`, `First_Name`, `Last_Name`, `Profile_type`, `Mobile_Number`, `Email`, `Username`, `Password`, `Join_Date`) VALUES
(1, 'Harsh', 'Aggarwal', 'Guest', '999-999-9999', 'harsh.aggarwal@mavs.uta.edu', 'harsh8', 'password', '2019-04-29 00:00:00');
-->
<?php $sql = "Insert into PROFILE (First_Name, Last_Name, Profile_type, Mobile_Number, Email, Username, Password, Join_Date) VALUES ('$fName','$lName','Guest','$pNumber','$eMail','$userName','$passWord','$_date');";

  $result = $conn->query($sql);
  $sql = "Insert into GUEST VALUES (@@IDENTITY,'$homeType')";
  $result = $conn->query($sql);
  mysqli_query($result);
?>

    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; 2019 Jamshed Jahangir</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->
</body>
</form>
</html>
