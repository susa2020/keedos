<?php

session_start();

require '../assets/setup/env.php';
require '../assets/setup/db.inc.php';
require '../assets/includes/auth_functions.php';
require '../assets/includes/security_functions.php';

if (isset($_SESSION['auth']))
    $_SESSION['expire'] = ALLOWED_INACTIVITY_TIME;

generate_csrf_token();
check_remember_me();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KG6T966');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--  <meta name="description" content="<?php //echo APP_DESCRIPTION;  ?>">
    <meta name="author" content="<?php //echo APP_OWNER;  ?>"> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- <title>keedos official</title> -->
    


    <title><?php echo TITLE . ' | ' . APP_NAME; ?></title>
    <link rel="icon" type="image/png" href="../assets/img/keedos_logo_small.png">

</head>

<body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KG6T966"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

      <?php require 'navbar.php'; ?>
