<?php

define('TITLE', "show resume");
include '../assets/layouts/header.php';
require("../assets/vendor/PHPDatabase/easyCRUD/Person.class.php");

$resumeID = $_GET["id"];

$person  = new Person();
$person->id = $resumeID;
$person->Find();

//d($person->Name, "Person->Name");
//d($person->Birth, "Person->Birth");

function d($v, $t = "")
{

   echo '<input class="form-control item" value=' . $v. ' type="text" id="name" placeholder="" name='.$t . ' style="margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;border-style: none;border-color: rgba(239,139,50,0);background: rgb(239,241,246);" required="" readonly="" disabled="">';

}

function d_textarea($v, $t = "")
{

   echo '<p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">' . $v. '</p>>';

}
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
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);font-family: FakePearl;">姓名</p>
                                  <?php d($person->Name, "name"); ?>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">性別</p>
                                <?php d($person->Gender, "gender"); ?>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">年齡</p>
                                <?php d($person->Age, "age"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-4 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">#Hashtag</p>
                                <?php d($person->Keyword, "keyword"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-8 col-lg-8" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">學籍或職稱</p>
                                <?php d($person->Job_title, "job_title"); ?>
                            </div>
                        </div>
                        <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">工作方式</p>
                                <?php d($person->Work_way, "work_way"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-6 col-lg-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">E-mail</p>
                                <?php d($person->Email, "email"); ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">社群帳號</p>
                                <?php d($person->Social_Media, "social_media"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 col-lg-6 col-xl-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">電話</p>
                                <?php d($person->Phone, "phone"); ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">作品集連結</p>
                                <?php d($person->Portfolio, "portfolio"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-12 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">自我介紹</p>
                                <?php d_textarea($person->Introduction, ""); ?>
                            </div>
                        </div>
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
