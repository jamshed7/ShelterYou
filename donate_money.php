<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Donate for Animals!</title>

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
            <span>When life gives you lemons, adopt an animal!</span>
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
              <h1>Donate for an Animal</h1>
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
                        <input name="userID" type="integer" class="form-control" id="userID" placeholder="Your user ID..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="animalID" type="integer" class="form-control" id="animalID" placeholder="Animal ID to donate for.." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="amount" type="float" class="form-control" id="amount" placeholder="Donation amount.." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Donate now!</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php $user_ID = $_POST["userID"]; ?>
<?php $animal_ID = $_POST["animalID"]; ?>
<?php $_amount = $_POST["amount"]; ?>
<?php $d=strtotime("today");
$_date = date("Y-m-d h:i:s", $d); ?>

<?php $sql = "Insert into DONATION VALUES('$user_ID','$_date','$_amount','$animal_ID')";
$result = $conn->query($sql);
mysqli_query($result);
?>





</body>
</form>
</html>
