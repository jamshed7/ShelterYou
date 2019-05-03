<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Update an animal!</title>

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
            <span>Change is good</span>
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
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Update an Animal's info</h1>
            </div>
          </div>

          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                  <div class="col-md-12">
                      <fieldset>
                        <input name="anID" type="text" class="form-control" id="anID" placeholder="Animal ID you seek to change info for..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="Name" type="text" class="form-control" id="Name" placeholder="New name..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="Age" type="text" class="form-control" id="Age" placeholder="New Age..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="Size" type="text" class="form-control" id="Size" placeholder="New size.." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="Color" type="text" class="form-control" id="Color" placeholder="New color..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-24">
                      <fieldset>
                        <input name="Description" type="text" class="form-control" id="Description" placeholder="New Description..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="submit" class="button">UPDATE!</button>
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


<?php $anID = $_POST["anID"]; ?>
<?php $Name = $_POST["Name"]; ?>
<?php $Age = $_POST["Age"]; ?>
<?php $Size = $_POST["Size"]; ?>
<?php $Color = $_POST["Color"]; ?>
<?php $Description = $_POST["Description"]; ?>

<?php $sql = "UPDATE ANIMAL SET Name='$Name', Age='$Age', Size='$Size', Color='$Color', Description='$Description' WHERE Animal_ID='$anID';";
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
