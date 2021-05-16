<?php

$DS = DIRECTORY_SEPARATOR;
//file_exists(__DIR__ . $DS . 'core' . $DS . 'Handler.php') ? require_once __DIR__ . $DS . 'core' . $DS . 'Handler.php' : die('Handler.php not found');
//file_exists(__DIR__ . $DS . 'core' . $DS . 'Config.php') ? require_once __DIR__ . $DS . 'core' . $DS . 'Config.php' : die('Config.php not found');



//require_once '../core/Handler.php';
//require_once '../core/Config.php';

//use AjaxLiveSearch\core\Config;
//use AjaxLiveSearch\core\Handler;

/*if (session_id() == '') {
    session_start();
}

    $handler = new Handler();
    $handler->getJavascriptAntiBot();
    */
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <!-- <title>keedos official</title>-->
  <meta name="theme-color" content="rgb(240,139,51)">
  <meta name="description" content="Keedos 是一個為學生打造的人才媒合平台。你可以在這裡存下你參與各種專案的機會，亦或者是透過我們的搜索引擎尋找到最適合和你一起創造奇蹟的夥伴。一起在高中生涯之中創造屬於你我的奇蹟。">
  <link rel="icon" type="image/svg+xml" sizes="223x206" href="/assets/img/K..svg">
  <link rel="icon" type="image/png" sizes="512x512" href="/assets/img/keedos_logo.png">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <link rel="manifest" href="/manifest.json">
  <link rel="stylesheet" href="/assets/css/FakePearl.css">
  <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="/assets/css/about-susa.css">
  <link rel="stylesheet" href="/assets/css/Footer-Dark.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
  <link rel="stylesheet" href="/assets/css/Login-Form-Clean.css">
  <link rel="stylesheet" href="/assets/css/Registration-Form-with-Photo.css">
  <link rel="stylesheet" href="/assets/css/styles.css">

  <?php
    //echo "string";


    ?>

  </head>
<body>

<section class="d-flex flex-column justify-content-between" >
  <div>

    <nav class="navbar navbar-light navbar-expand-md" style="padding: 8px;padding-right: 50px;padding-left: 50px;padding-top: 8px;padding-bottom: 8px;">
      <div class="container-fluid"><a class="navbar-brand" href="/"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active about" style="color: #18191f;font-size: 14px;width: 90px;padding: 0px;padding-top: 12px;font-family: FakePearl;" href="../about-susa">About SUSA</a></li>
            <li class="nav-item working"><a class="nav-link working" style="color: #18191f;font-size: 15px;padding: 0px;width: 70px;font-family: FakePearl;" href="/#how-to-use">運作方式</a></li>
          </ul><span class="ml-auto navbar-text actions">

            <?php //include '../../search.php'; ?>

            <?php if (!isset($_SESSION['auth'])) { ?>

            <a class="login" href="../login">登入</a>
            <a class="btn btn-light action-button" role="button" href="../register">註冊</a>

             <?php }else{ ?>
            <a class="login" href="../search">搜尋</a>
            <a class="login" href="../dev_link">測試</a>
            <a class="login" href="../login">後台</a>
            <a class="btn btn-light action-button" role="button" href="../logout">登出</a>
             <?php } ?>

          </span>
        </div>
      </div>
    </nav>
  </div>
</section>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>




</body>
</html>
