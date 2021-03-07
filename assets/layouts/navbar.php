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
    <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styles.css">



  </head>
<body>
 <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container">
          <a class="navbar-brand" href="../index">&nbsp;Keedos&nbsp;</a>
          <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">關於我們</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">如何開始</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Link 3</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>

                </form><i class="fa fa-search" style="margin: 5px;"></i><input type="text" id="ls_query" class="mySearch" name="search" style="border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;border-width: 2px;border-style: solid;padding: 1px;margin: 5px;">

                      <?php //include '../../search.php'; ?>

                      <?php if (!isset($_SESSION['auth'])) { ?>
                            <a class="btn btn-light action-button" role="button" href="../login" style="margin: 3px;">登入</a><a class="btn btn-light action-button" role="button" href="../register" style="margin: 3px;">註冊</a>


                      <?php }else{ ?>

                            <a class="btn btn-light action-button" role="button" href="../login" style="margin: 3px;">後台</a>
                            <a class="btn btn-light action-button" role="button" href="../logout" style="margin: 3px;">登出</a>

                      <?php } ?>


            </div>
        </div>
    </nav>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>


    </script>




</body>
</html>
