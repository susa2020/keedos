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
    <title>keedos official</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>

    <?php if (isset($_GET['selector']) && isset($_GET['validator'])) { ?>
      <div class="login-clean" style="background: rgb(255,255,255);"><a class="btn btn-primary" role="button" style="background: url(&quot;../assets/img/Back.svg&quot;) left no-repeat;margin-left: 50px;border-style: none;border-top-style: none;border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);" href="../login"></a>
        <form method="post" action="includes/reset.inc.php" style="border-color: rgb(255,255,255);">

          <?php
              insert_csrf_token();

              $selector = $_GET['selector'];
              $validator = $_GET['validator'];
          ?>

          <input type="hidden" name="selector" value="<?php echo $selector; ?>">
          <input type="hidden" name="validator" value="<?php echo $validator; ?>">


            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><strong style="padding: 15px;">重設密碼</strong></div>

            <div class="text-center mb-3">
                <small class="text-success font-weight-bold">
                    <?php
                        if (isset($_SESSION['STATUS']['resetsubmit']))
                            echo $_SESSION['STATUS']['resetsubmit'];

                    ?>
                </small>
            </div>

            <div class="text-center mb-3">
                <sub class="text-danger">
                    <?php
                        if (isset($_SESSION['ERRORS']['passworderror']))
                            echo $_SESSION['ERRORS']['passworderror'];
                    ?>
                </sub>
            </div>

            <div class="form-group">
              <input class="form-control" type="password" id="newpassword" name="newpassword" placeholder="新密碼" autocomplete="new-password" style="border-radius: 16px;">
            </div>

            <div class="form-group">
              <input class="form-control" type="password" id="confirmpassword" name="confirmpassword" placeholder="確認密碼" autocomplete="new-password" style="border-radius: 16px;">
            </div>

            <div class="form-group">
                <div class="form-row" style="text-align: center;margin: 0px;opacity: 1;">
                    <div class="col">
                        <p></p>
                    </div>
                    <div class="col" style="padding: 0px;padding-right: 0px;">
                      <button class="btn btn-primary btn-block" type="submit" value="resetsubmit" name="resetsubmit" style="text-align: center;border-radius: 40px;font-family: Poppins;background: #f08b33;font-family: Poppins;font-style: normal;font-weight: 600;font-size: 14px;line-height: 24px;align-items: center;text-align: center;letter-spacing: 0.75px;color: #ffffff;width: 184px;height: 40px;">重設密碼
                      </button>
                    </div>
                    <div class="col">
                        <p></p>
                    </div>
                </div>
            </div>
          </form>
        </div>

      <?php } else { ?>
        <div class="login-clean" style="background: rgb(255,255,255);"><a class="btn btn-primary" role="button" style="background: url(&quot;../assets/img/Back.svg&quot;) left no-repeat;margin-left: 50px;border-style: none;border-top-style: none;border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);" href="../login"></a>
          <form method="post" action="includes/sendtoken.inc.php" style="border-color: rgb(255,255,255);">

            <?php insert_csrf_token(); ?>

            <div class="illustration"><strong style="padding: 15px;">重設密碼</strong></div>

            <div class="text-center mb-3">
                <small class="text-success font-weight-bold">
                    <?php
                        if (isset($_SESSION['STATUS']['resentsend']))
                            echo $_SESSION['STATUS']['resentsend'];

                    ?>
                </small>
            </div>

            <div class="form-group">
              <input class="form-control" type="email" id="email" name="email" placeholder="Email" inputmode="email" style="border-radius: 16px;">
              <sub class="text-danger">
                  <?php
                      if (isset($_SESSION['ERRORS']['emailerror']))
                          echo $_SESSION['ERRORS']['emailerror'];
                  ?>
              </sub>
            </div>
            <div class="form-group">
                <div class="form-row" style="text-align: center;margin: 0px;opacity: 1;">
                    <div class="col">
                        <p></p>
                    </div>
                    <div class="col" style="padding: 0px;padding-right: 0px;">
                      <button class="btn btn-primary btn-block" type="submit" value="resentsend" name="resentsend" style="text-align: center;border-radius: 40px;font-family: Poppins;background: #f08b33;font-family: Poppins;font-style: normal;font-weight: 600;font-size: 14px;line-height: 24px;align-items: center;text-align: center;letter-spacing: 0.75px;color: #ffffff;width: 184px;height: 40px;">發送密碼重設連結
                      </button>
                    </div>
                    <div class="col">
                        <p></p>
                    </div>
                </div>
            </div>
        </form>
      </div>

      <?php } ?>


    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
