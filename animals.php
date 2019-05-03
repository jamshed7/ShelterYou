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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Animals - near you</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>


  <body>

    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>Horses are the real man's best friend</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <!--<a class="navbar-brand" href="#"><img src="assets/images/new-logo.png" alt=""></a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="animals.php">Animals
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="donate_money.php">Donate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="make_inquiry.php">Make an Inquiry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_animal.php">Enlist for Adoption</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>All Our Animals</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              <button class="btn btn-primary" data-filter="*">All Animals</button>
              <button class="btn btn-primary" data-filter=".Horse">Horses</button>
              <button class="btn btn-primary" data-filter=".Snake">Snakes</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="featured container no-gutter">
        <div class="row posts">

          <?php
          $query = "SELECT * FROM ANIMAL";
          $i = 1;
          if($result = $conn->query($query) )
          {
            while( $row = mysqli_fetch_array($result) )
            {
              echo '<div id="'.$i.'" class="item '.$row[Animal_type].' col-md-4">';
              echo '<a href="single-animal.php">';
              echo '<div class="featured-item">';
              echo '<img src="assets/animal_pics/'.$i++.'.jpg" alt="">';
              //echo '<img src="assets/images/product-01.jpg" alt="">';
              echo '<h4>'.$row["Name"].'</h4>';
              if($row[Is_available])
              {
                echo "<h6>Is Available</h6></br>";
              }
              else
              {
                echo "<h6>No longer Advailabe</h6></br>";
              }
              echo '<h6>Type: '.$row["Animal_type"].'</h6>';
              echo '<p>Age: '.$row["Age"].' years</p>';
              echo '<p>Size: '.$row["Size"].'</p>';
              echo '<p>'.$row["Description"].'</p></br>';
              echo '<p><strong>Likes:</strong> '.$row["Likes"].'</p>';
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
          }
          else{
            echo "0 results";
          }
           ?>




        </div>

    </div>

    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="current-page"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Page Ends Here -->



    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; Jamshed Jahangir</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
