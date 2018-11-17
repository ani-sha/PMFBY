<?php
require_once 'config.php';
require_once 'database.php';

$sql = "SELECT * FROM report";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

?>













<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pradhan Mantri Fasal Bima Yojana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/sequence.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


</head>

<body>
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="index.html"><img src="assets/img/head.png" alt=""></a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="active">
                  <a href="logout.php">Logout</a>
                </li>




              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
  <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <li>
                    <div class="info animate-in">
                      <h2>Physical Verification Status</h2>
                      <br>
                      <h3>Solve your insurance problems</h3>
                      <p>
                        <?php
  $sql = "SELECT * FROM report WHERE id = " .  $_GET['id'];
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    echo ' Face Verification Status :' . $user['faceverificationstatus'];?><br><br>
    <?php echo 'Fund Disburse Date : '. $user['disbursedate'];?><br><br>

    <?php echo 'Fund Disburse Status : '. $user['disburseconfirmation'];?><br><br>


















<?php
  } else {
    echo "No user found!";
  }
  ?>

                      </p>
                      <a class="btn btn-success" href="#">Learn more &raquo;</a>
                    </div>
                    <img class="slider_img animate-in" src="assets/img/slides/sequence/img-1.jpg" alt="">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer
 ================================================== -->

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="widget">
          <h5>Browse Pages</h5>
          <ul class="regular">
            <li><a href="#">Home</a></li>
            <li><a href="adminlogin.php">Login</a></li>
            <li><a href="adminregister.html">Register</a></li>
          </ul>
        </div>
      </div>
      <div class="span4">
        <div class="widget">
          <h5>What's New?</h5>
          <ul class="regular">
            <li>Face ID verification for secure access</li>
            <li>Quicker claim access through the right channels </li>
            <li>Direct credits into bank accounts</li>
          </ul>
        </div>
      </div>
      <div class="span4">
        <div class="widget">
          <h5>Team Members</h5>
          <ul class="regular">
            <li>Tamanna Nayak</li>
            <li>Anisha Mohanty</li>
            <li>Dikshant Brahma</li>
            <li>Adarsh Brata</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="verybottom">
    <div class="container">
      <div class="row">
        <div class="span">
          <p>
            This website belongs to Department of Agriculture, Cooperation and Farmers Welfare, Ministry of Agriculture and Farmers Welfare, Government of India.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

  <!-- JavaScript Library Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="assets/js/sequence/setting.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/application.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>
</html>
