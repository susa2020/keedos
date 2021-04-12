<?php
ob_start();
define('TITLE', "edit resume");
include '../assets/layouts/header.php';
check_logged_in();
?>

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/resume-edit.css">
</head>

<body>

    <div class="resume-section">
        <div class="resume-form" style="opacity: 1;">
            <form method="post" action="includes/edit-resume.inc.php" style="border-style: none;padding-right: 20px;padding-left: 20px;"><img src="../assets/img/1.jpg">
              <?php insert_csrf_token(); ?>
                <div class="container">
                    <div class="form-row" style="margin-right: -5px;">
                        <div class="col-sm-12 col-md-4 col-lg-8" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);font-family: FakePearl;">姓名</p><input class="form-control item" type="text" id="name" placeholder="" name="name" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">性別</p><input class="form-control item" type="text" id="gender" placeholder="" name="gender" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">年齡</p><input class="form-control item" type="text" id="age" placeholder="" name="age" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" required="" inputmode="numeric">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">#Hashtag 1</p><input class="form-control item" type="text" id="hashtag1" name="hashtag1" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" required="">
                            </div>
                        </div>
                        <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">#Hashtag 2</p><input class="form-control item" type="text" id="hashtag2" name="hashtag2" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" required="">
                            </div>
                        </div>
                        <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">#Hashtag 3</p><input class="form-control item" type="text" id="hashtag3" name="hashtag3" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" required="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-8 col-lg-8" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">學籍或職稱</p><input class="form-control item" type="text" id="job_title" name="job_title" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;">
                            </div>
                        </div>
                        <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">工作方式</p><input class="form-control item" type="text" id="work_way-6" placeholder="" name="work_way" required=""  style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-6 col-lg-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">E-mail</p><input class="form-control item" type="text" id="email" placeholder="" name="email" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" inputmode="email" required="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">社群帳號</p><input class="form-control item" type="text" id="email" placeholder="" name="social_media" required="" " style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 col-lg-6 col-xl-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">電話</p><input class="form-control item" type="text" id="username-7" required="" minlength="4" maxlength="15" pattern="^[a-zA-Z0-9_.-]*$" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" inputmode="tel" name="phone" autocomplete="on">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">作品集連結</p><input class="form-control item" type="text" id="username-4" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" inputmode="url" name="portfolio">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-12 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">自我介紹</p><textarea class="form-control" style="border-style: none;" name="self_intro" spellcheck="true"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-1 col-md-4"></div>
                        <div class="col-10 col-md-4">
                            <div class="form-group"><button class="btn btn-primary btn-block create-account" type="submit" style="border-color: rgb(157,162,173);background: rgb(157,162,173);">儲存</button></div>
                        </div>
                        <div class="col-1 col-md-4"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>
