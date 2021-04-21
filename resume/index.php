<?php
ob_start();
define('TITLE', "show resume");
include '../assets/layouts/header.php';
require("../assets/vendor/PHPDatabase/easyCRUD/Person.class.php");
check_logged_in();

$resumeID = $_GET["id"];

$person  = new Person();
$person->id = $resumeID;
$person->Find();

//d($person->Name, "Person->Name");
//d($person->Birth, "Person->Birth");

function d($v, $t = "")
{

   echo '<input class="form-control item" value="' . $v. '" type="text" id="name" placeholder="" name='.$t . ' style="margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;border-style: none;border-color: rgba(239,139,50,0);background: rgb(239,241,246);" required="" readonly="" disabled="">';

}

function d_textarea($v, $t = "")
{

   echo '<p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);" >' . $v. '</p>';

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
          <form style="border-style: none;padding-right: 20px;padding-left: 20px;"><img src="assets/img/1.jpg">
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
                      <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                          <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                              <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">#Hashtag 1</p><input class="form-control item" type="text" id="username-2" name="hashtag1" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" required="">
                          </div>
                      </div>
                      <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                          <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                              <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">#Hashtag 2</p><input class="form-control item" type="text" id="username-7" name="hashtag2" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" required="">
                          </div>
                      </div>
                      <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                          <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                              <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">#Hashtag 3</p><input class="form-control item" type="text" id="username-3" name="hashtag3" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" required="">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="form-row">
                      <div class="col-md-8 col-lg-8" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                          <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                              <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">學籍或職稱</p><input class="form-control item" type="text" id="username" name="job_title" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;">
                          </div>
                      </div>
                      <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                          <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                              <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">工作方式</p><select class="form-control" style="border-style: none;border-top-style: none;" name="work-way">
                                  <option value="遠端工作">遠端工作</option>
                                  <option value="線下協作">線下協作</option>
                              </select>
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
                              <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">社群帳號(FB, IG)</p><input class="form-control item" type="text" id="email" placeholder="" name="social-media" required="" minlength="4" maxlength="15" pattern="^[a-zA-Z0-9_.-]*$" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;">
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
                              <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">專業連結(GitHub, LinkedIn...)</p><input class="form-control item" type="text" id="username-4" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" inputmode="url" name="pro-link">
                          </div>
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="col-md-6 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                          <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                              <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">現在是否為其他其他專案團隊的成員 (如果是請說明)<br></p><input class="form-control item" type="text" id="username-5" required="" minlength="4" maxlength="15" pattern="^[a-zA-Z0-9_.-]*$" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;" inputmode="tel" name="phone" autocomplete="on">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="form-row">
                      <div class="col-md-12 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                          <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                              <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">自我介紹</p><textarea class="form-control" style="border-style: none;height: 150px;" name="self-intro" spellcheck="true"></textarea>
                          </div>
                      </div>
                      <div class="col-md-12 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                          <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                              <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">近三年內代表經歷 <br></p><textarea class="form-control" style="border-style: none;height: 100px;" name="self-intro" spellcheck="true"></textarea>
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
</body>

</html>
