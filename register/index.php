<?php

define('TITLE', "Signup");
include '../assets/layouts/header.php';
check_logged_out();

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>keedos official</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div class="login-clean" style="background: rgb(255,255,255);"><a class="btn btn-primary" role="button" style="background: url(&quot;../assets/img/Back.svg&quot;) left no-repeat;margin-left: 50px;border-style: none;border-top-style: none;border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);" href="index.html"></a>
        <form class="form-auth" action="includes/register.inc.php" method="post" enctype="multipart/form-data" style="border-color: rgb(255,255,255);">

            <?php insert_csrf_token(); ?>



            <div class="illustration"><strong style="padding: 15px;text-align: center;font-family:FakePearl-Regular;">註冊</strong></div>

            <div class="text-center mb-3">
                <small class="text-success font-weight-bold">
                    <?php
                        if (isset($_SESSION['STATUS']['signupstatus']))
                            echo $_SESSION['STATUS']['signupstatus'];

                    ?>
                </small>
            </div>

            <div class="form-group">
              <input class="form-control" type="text" id="username" name="username" placeholder="帳號" required autofocus="" style="border-radius: 16px;text-align: left;">
              <sub class="text-danger">
                  <?php
                      if (isset($_SESSION['ERRORS']['usernameerror']))
                          echo $_SESSION['ERRORS']['usernameerror'];

                  ?>
              </sub>
            </div>

            <div class="form-group">
              <input class="form-control" type="email" id="email" name="email" placeholder="Email" inputmode="email" required style="border-radius: 16px;">
              <sub class="text-danger">
                  <?php
                      if (isset($_SESSION['ERRORS']['emailerror']))
                          echo $_SESSION['ERRORS']['emailerror'];

                  ?>
              </sub>
            </div>

            <div class="form-group">
              <input class="form-control" type="password" id="password" name="password" placeholder="密碼" inputmode="verbatim" required style="border-radius: 16px;">
            </div>

            <div class="form-group">
              <input class="form-control" type="password" id="confirmpassword" name="confirmpassword" placeholder="確認密碼" inputmode="verbatim" required style="border-radius: 16px;">
              <sub class="text-danger mb-4">
                  <?php
                      if (isset($_SESSION['ERRORS']['passworderror']))
                          echo $_SESSION['ERRORS']['passworderror'];

                  ?>
              </sub>
            </div>
            <div class="form-group">
                <div class="form-row" style="text-align: center;margin: 0px;opacity: 1;">
                    <div class="col">
                        <p></p>
                    </div>
                    <div class="col" style="padding: 0px;padding-right: 0px;">
                    <button class="btn btn-primary btn-block" type="submit" value="signupsubmit" name='signupsubmit' style="text-align: center;border-radius: 40px;font-family: Poppins;background: #f08b33;font-family: Poppins;font-style: normal;font-weight: 600;font-size: 14px;line-height: 24px;align-items: center;text-align: center;letter-spacing: 0.75px;color: #ffffff;width: 184px;height: 40px;">
                        繼續</button>

                    </div>
                    <div class="col">
                        <p></p>
                    </div>
                </div>
            </div>




            <div class="form-row">
                <div class="col"><a class="forgot" href="login.html">註冊過了?</a></div>
                <div class="col"><a class="forgot" href="reset-password.html">忘記密碼?</a></div>
            </div>
        </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>



<script type="text/javascript">
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);

            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#avatar").change(function() {
        console.log("here");
        readURL(this);
    });
</script>
