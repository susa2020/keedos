<!DOCTYPE html>
<?php

define('TITLE', "Login");
include '../assets/layouts/header.php';
check_logged_out();
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>keedos official</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
  <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="../assets/css/Article-Dual-Column.css">
  <link rel="stylesheet" href="../assets/css/Footer-Clean.css">
  <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
  <link rel="stylesheet" href="../assets/css/Header-Blue.css">
  <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
  <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
     <!-- <script src="jquery.js"></script>  用途 -->
</head>

<body>

    <header class="header-blue">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">

        <div class="container hero">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <h1>The revolution is here.</h1>
                    <p>Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque quis sapien viverra convallis. In non tempus lorem. </p><button class="btn btn-light btn-lg action-button" type="button">Learn More</button>
                </div>
                <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                    <div class="phone-mockup"><img class="device" src="../assets/img/phone.svg">
                        <div class="screen"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="article-dual-column">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="intro">
                        <h1 class="text-center">Your Wonderful Article Title</h1>
                        <p class="text-center"><span class="by">by</span> <a href="#">Author Name</a><span class="date">Sept 8th, 2016 </span></p><img class="img-fluid" src="../assets/img/desk.jpg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-3 offset-md-1">
                    <div class="toc">
                        <p>Table of Contents</p>
                        <ul>
                            <li><a href="#">Aliquam In Arcu </a> </li>
                            <li><a href="#">Ut vehicula rhoncus</a></li>
                            <li><a href="#">Lorem Ipsum </a> </li>
                            <li><a href="#">Dolor sit amet</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-lg-7 offset-md-1 offset-lg-0">
                    <div class="text">
                        <p>Sed lobortis mi. Suspendisse vel placerat ligula. <span style="text-decoration: underline;">Vivamus</span> ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. <strong>Ut vehicula rhoncus</strong> elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit <em>pulvinar dict</em> vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        <h2>Aliquam In Arcu </h2>
                        <p>Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        <figure class="figure"><img class="figure-img" src="../assets/img/beach.jpg">
                            <figcaption class="figure-caption">Caption</figcaption>
                        </figure>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

<?php
require("../assets/layouts/footer.php");
?>

</html>
