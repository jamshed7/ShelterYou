<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Add an Animal!</title>

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
            <span>Good things in life come to those who adopt animals!</span>
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
              <h1>Add new animal</h1>
            </div>
          </div>

          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-8">
                      <fieldset><br>
                        <select input name="Animal_type" type="select" class="form-control" id="Animal_type" placeholder="Choose Animal Type" required=""><option></option><option>Horse</option><option>Snake</option>
						</fieldset>
						</select></td><br></div>
                      </div>
                    <div class="col-md-8">
                      <fieldset>
                        <input name="Name" type="text" class="form-control" id="Name" placeholder="Name the animal!" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-8">
                      <fieldset>
                        <input name="Age" type="number" min="0" class="form-control" id="Age" placeholder="How old are they?" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-8">
                      <fieldset>
                        <select input name="Size" type="select" class="form-control" id="Size" placeholder="Big boi or nah?" required=""><option></option><option>Small</option><option>Medium</option><option>Large</option>
                      </fieldset>
                    </select></td><br></div>
                    <div class="col-md-8">
                      <fieldset>
                        <input name="Breed" type="text" class="form-control" id="Breed" placeholder="What Breed?" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-8">
                      <fieldset>
                        <input name="Color" type="text" class="form-control" id="Color" placeholder="Color?" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-8">
                      <fieldset>
                        <input name="Description" type="text" class="form-control" id="Description" placeholder="Describe em!" required="">
                      </fieldset>
                    </div>

                    <!--
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                      </fieldset>
                    </div> -->
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="submit" class="button">ADD ANIMAL!</button>
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

<?php $Animal_type = $_POST['Animal_type']; ?>
<?php $Name = $_POST['Name']; ?>
<?php $Age = $_POST['Age']; ?>
<?php $Size = $_POST['Size']; ?>
<?php $Breed = $_POST['Breed']; ?>
<?php $Color = $_POST['Color']; ?>
<?php $Description = $_POST['Description']; ?>
<?php $d=strtotime("today");
$Posted_date = date("Y-m-d h:i:s", $d); ?>

<?php $sql = "INSERT INTO animal(Animal_type, Name, Age, Size, Breed, Color, Posted_date, Description, Is_available, Num_of_likes) VALUES ('$Animal_type','$Name','$Age','$Size','$Breed','$Color','$Posted_date','$Description','1','0');";

  $result = $conn->query($sql);

if ($Animal_type=="Horse") {
    $sql = "INSERT INTO Horse VALUES (@@IDENTITY,0);";
} else {
    $sql = "INSERT INTO Snake VALUES (@@IDENTITY,0);";
}
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
