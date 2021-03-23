<?php

$DS = DIRECTORY_SEPARATOR;
//file_exists(__DIR__ . $DS . 'core' . $DS . 'Handler.php') ? require_once __DIR__ . $DS . 'core' . $DS . 'Handler.php' : die('Handler.php not found');
//file_exists(__DIR__ . $DS . 'core' . $DS . 'Config.php') ? require_once __DIR__ . $DS . 'core' . $DS . 'Config.php' : die('Config.php not found');



require_once '../core/Handler.php';
require_once '../core/Config.php';

use AjaxLiveSearch\core\Config;
use AjaxLiveSearch\core\Handler;

if (session_id() == '') {
    session_start();
}

    $handler = new Handler();
    $handler->getJavascriptAntiBot();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/FakePearl.css">
  <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="../assets/css/about-susa.css">
  <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
  <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
  <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
  <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
  <link rel="stylesheet" href="../assets/css/styles.css">



  </head>
<body>

    <nav class="navbar navbar-light navbar-expand-md" style="padding: 8px;padding-right: 50px;padding-left: 50px;padding-top: 8px;padding-bottom: 8px;">
      <div class="container-fluid"><a class="navbar-brand" href="../index"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active about" style="color: #18191f;font-size: 14px;width: 90px;padding: 0px;padding-top: 12px;font-family: FakePearl;" href="about-susa.html">About SUSA</a></li>
            <li class="nav-item working"><a class="nav-link working" style="color: #18191f;font-size: 15px;padding: 0px;width: 70px;font-family: FakePearl;" href="#how-to-use">運作方式</a></li>
          </ul>
          <span class="ml-auto navbar-text actions">
            <?php //include '../../search.php'; ?>

            <?php if (!isset($_SESSION['auth'])) { ?>
             <a class="login" href="../login">登入</a>
             <a class="btn btn-light action-button" role="button" href="../register">註冊</a>

             <?php }else{ ?>

               <a class="login" href="../login">後台</a>
               <a class="btn btn-light action-button" role="button" href="../logout">登出</a>
              <?php } ?>

           </span>
        </div>
      </div>
    </nav>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>


    </script>




</body>
</html>
