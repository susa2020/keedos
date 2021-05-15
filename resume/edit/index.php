<?php
ob_start();
define('TITLE', "edit resume");

require( $_SERVER['DOCUMENT_ROOT'].'/file_dir_config.php' );
include( VIEW_HEADER );
//include '/assets/layouts/header.php';
require("../../assets/vendor/PHPDatabase/easyCRUD/Person.class.php");
check_logged_in();

$resumeID = $_GET["id"];
$person  = new Person();
$person->id = $resumeID;
$person->Find();

//d($person->Name, "Person->Name");
//d($person->Birth, "Person->Birth");

function d($v, $t = "")
{
  //echo '<input class="form-control item" value="' . $v. '" type="text"  placeholder="" name='.$t . ' style="margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;border-style: none;border-color: rgba(239,139,50,0);background: rgb(239,241,246);" required=""  disabled="">';

  echo '<input class="form-control item" value="' . $v. '"type="text"  name='.$t . ' style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;text-align: left;">';

}

function d_textarea($v, $t = "")
{

   //echo '<p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);" >' . $v. '</p>';
   echo '<textarea class="form-control" value="' .$v. '" name=' .$t. ' style="border-style: none;height: 100px;text-align: left;" spellcheck="true" ></textarea>';
}
?>

<div class="resume-section"></div>
<section class="team-boxed" style="background: #eef4f7;">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1 item" style="padding-top: 30px;">
        <div class="box">
          <div class="row">
            <div class="col" style="padding-right: 0px;padding-left: 0px;">
              <form method="post" action="includes/edit-resume.inc.php" style="border-style: none;"><img class="rounded-circle img-fluid" src="../../assets/img/1.jpg" loading="lazy" style="padding: 10px;padding-top: 20px;padding-bottom: 20px;width: 120px;">
                <div class="container">
                  <?php echo '<input type="hidden" name="id" value="' . $resumeID . '" />';  ?>

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
                    <div class="col-md-8 col-lg-8" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                      <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">就讀/畢業學校</p>
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
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">社群帳號(FB, IG)</p>
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
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">專業連結(GitHub, LinkedIn...)</p>
                        <?php d($person->Pro_link, "pro-link"); ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 col-lg-12 col-xl-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                      <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">現在是否為其他其他專案團隊的成員<br></p>
                        <?php d($person->If_other_org, "if-other-org"); ?>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                      <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">所在地區<br></p>
                        <?php d($person->Location, "location"); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="form-row">
                    <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                      <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">代表自己的三個關鍵字 #1<br></p>
                        <?php d($person->Hashtag1, "hashtag1"); ?>
                      </div>
                    </div>
                    <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                      <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">代表自己的三個關鍵字 #2</p>
                        <?php d($person->Hashtag2, "hashtag2"); ?>
                      </div>
                    </div>
                    <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                      <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">代表自己的三個關鍵字 #3<br></p>
                        <?php d($person->Hashtag3, "hashtag3"); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="form-row">
                    <div class="col-md-12 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                      <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">其它關鍵字 (選填)</p>
                        <?php d_textarea($person->Hashtag_other, "hashtag_other"); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="form-row">
                    <div class="col-md-12 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                      <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">自我介紹</p>
                        <?php d_textarea($person->Introduction, "self_intro"); ?>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                      <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                        <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">近三年內代表經歷 <br></p>
                        <?php d_textarea($person->Experience, "experience"); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="form-row">
                    <div class="col-1 col-md-4"></div>
                    <div class="col-10 col-md-4">
                      <div class="form-group"><button class="btn btn-primary btn-block border rounded-pill create-account" type="submit" style="border-color: rgb(157,162,173);background: rgb(157,162,173);">儲存</button></div>
                    </div>
                    <div class="col-1 col-md-4"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</html>
