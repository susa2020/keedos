<?php

define('TITLE', "Login");
include '../assets/layouts/header.php';
check_logged_out();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Keedos 是一個為學生打造的人才媒合平台。你可以在這裡存下你參與各種專案的機會，亦或者是透過我們的搜索引擎尋找到最適合和你一起創造奇蹟的夥伴。一起在高中生涯之中創造屬於你我的奇蹟。">
    <title>keedos official</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/FakePearl.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div class="login-clean" style="background: rgb(255,255,255);"><a class="btn btn-primary" role="button" style="background: url(&quot;../assets/img/Back.svg&quot;) left no-repeat;margin-left: 50px;border-style: none;border-top-style: none;border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);" href="../index"></a>
        <form method="post" action="includes/login.inc.php" style="border-color: rgb(255,255,255);">

            <?php insert_csrf_token(); ?>

            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><strong style="padding: 15px;font-family: FakePearl-Regular;">登入</strong></div>

            <small class="text-success font-weight-bold">
                <?php
                    if (isset($_SESSION['STATUS']['loginstatus']))
                        echo $_SESSION['STATUS']['loginstatus'];

                ?>
            </small>

            <div class="form-group">
              <input class="form-control" type="text" id="username" name="username" placeholder="帳號" autofocus="" style="border-radius: 16px;font-family: FakePearl-Regular;">
              <sub class="text-danger">
                  <?php
                      if (isset($_SESSION['ERRORS']['nouser']))
                          echo $_SESSION['ERRORS']['nouser'];
                  ?>
              </sub>
            </div>

            <div class="form-group">
              <input class="form-control" type="password" id="password" name="password" placeholder="密碼" inputmode="verbatim" style="border-radius: 16px;">
              <sub class="text-danger">
                  <?php
                      if (isset($_SESSION['ERRORS']['wrongpassword']))
                          echo $_SESSION['ERRORS']['wrongpassword'];
                  ?>
              </sub>
            </div>

            <div class="form-group">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme"/>
                <label class="form-check-label" for="checkbox">記住我</label>
              </div>
            </div>

            <div class="form-group">
                <div class="form-row" style="text-align: center;margin: 0px;opacity: 1;">
                    <div class="col">
                        <p></p>
                    </div>
                    <div class="col" style="padding: 0px;padding-right: 0px;">
                      <button class="btn btn-primary btn-block" type="submit" value="loginsubmit" name="loginsubmit" style="text-align: center;border-radius: 40px;font-family: Poppins;background: #f08b33;font-family: Poppins;font-style: normal;font-weight: 600;font-size: 14px;line-height: 24px;align-items: center;text-align: center;letter-spacing: 0.75px;color: #ffffff;width: 184px;height: 40px;">登入</button>
                    </div>
                    <div class="col">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col"><a class="forgot" href="../register">沒有帳號?</a></div>
                <div class="col"><a class="forgot" href="../reset-password">忘記密碼?</a></div>
            </div>
        </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>




</html>
