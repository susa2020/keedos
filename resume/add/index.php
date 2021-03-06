<?php
ob_start();
define('TITLE', "edit resume");

require( $_SERVER['DOCUMENT_ROOT'].'/file_dir_config.php' );
include( VIEW_HEADER );
//include '/assets/layouts/header.php';
require("../../assets/vendor/PHPDatabase/easyCRUD/Person.class.php");
check_logged_in();
?>

<div class="resume-section"></div>
<section class="team-boxed" style="background: #eef4f7;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1 item" style="padding-top: 30px;">
                <div class="box">
                    <div class="row">
                        <div class="col" style="padding-right: 0px;padding-left: 0px;">
                            <form method="post" action="includes/edit-resume.inc.php" style="border-style: none;"><img class="rounded-circle img-fluid" src="/assets/img/1.jpg" loading="lazy" style="padding: 10px;padding-top: 20px;padding-bottom: 20px;width: 120px;">
                                <div class="container">
                                    <div class="form-row" style="margin-right: -5px;">
                                        <div class="col-sm-12 col-md-4 col-lg-8" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);font-family: FakePearl;">姓名</p><input class="form-control item" type="text" id="name" placeholder="" name="name" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;text-align: left;" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-2" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">性別</p><select class="form-control" style="border-style: none;" name="gender" required="">
                                                    <option value="生理男">生理男</option>
                                                    <option value="生理女">生理女</option>
                                                    <option value="不願透露">不願透露</option>
                                                    <option value="跨性別">跨性別</option>
                                                    <option value="雙性">雙性</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-2" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">年齡</p><input class="form-control item" type="text" id="username-1" placeholder="" name="age" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;color: var(--purple);text-align: left;" required="" inputmode="numeric">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-row">
                                        <div class="col-md-8 col-lg-8" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">就讀/畢業學校</p><input class="form-control item" type="text" id="username" name="job_title" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;text-align: left;">
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">工作方式</p><select class="form-control" style="border-style: none;border-top-style: none;" name="work_way" required="">
                                                    <option value="遠端工作">遠端工作</option>
                                                    <option value="線下協作">線下協作</option>
                                                    <option value="遠端及線下皆可">遠端及線下皆可</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">E-mail</p><input class="form-control item" type="text" id="email" placeholder="" name="email" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;text-align: left;" inputmode="email" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">社群帳號(FB, IG)</p><input class="form-control item" type="text" id="email" placeholder="" name="social_media" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;text-align: left;" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-6 col-xl-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">電話</p><input class="form-control item" type="text" id="username-7" required="" minlength="4" maxlength="15" pattern="^[a-zA-Z0-9_.-]*$" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;text-align: left;" inputmode="tel" name="phone" autocomplete="on">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">專業連結(GitHub, LinkedIn...)</p>
                                                <input class="form-control item" type="text" id="username-4" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;text-align: left;" inputmode="url" name="pro-link">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-12 col-xl-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">現在是否為其他其他專案團隊的成員<br></p><select class="form-control" style="border-style: none;border-top-style: none;" name="if-other-org" required="">
                                                    <option value="是">是</option>
                                                    <option value="否">否</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xl-6" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">所在地區<br></p><select class="form-control" style="border-style: none;border-top-style: none;" name="location" required="">
                                                    <option value="台北">台北</option>
                                                    <option value="新北">新北</option>
                                                    <option value="基隆">基隆</option>
                                                    <option value="桃園">桃園</option>
                                                    <option value="新竹">新竹</option>
                                                    <option value="宜蘭">宜蘭</option>
                                                    <option value="苗栗">苗栗</option>
                                                    <option value="台中">台中</option>
                                                    <option value="彰化">彰化</option>
                                                    <option value="南投">南投</option>
                                                    <option value="嘉義">嘉義</option>
                                                    <option value="雲林">雲林</option>
                                                    <option value="台南">台南</option>
                                                    <option value="高雄">高雄</option>
                                                    <option value="屏東">屏東</option>
                                                    <option value="花蓮">花蓮</option>
                                                    <option value="台東">台東</option>
                                                    <option value="澎湖">澎湖</option>
                                                    <option value="金門">金門</option>
                                                    <option value="連江（馬祖）">連江（馬祖）</option>
                                                    <option value="其它">其它</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-row">
                                        <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">代表自己的三個關鍵字 #1<br></p><input class="form-control item" type="text" id="username-2" name="hashtag1" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;text-align: left;" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">代表自己的三個關鍵字 #2</p><input class="form-control item" type="text" id="username-7" name="hashtag2" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;text-align: left;" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">代表自己的三個關鍵字 #3<br></p><input class="form-control item" type="text" id="username-3" name="hashtag3" style="border-style: none;border-color: var(--white);margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;border-radius: 16px;text-align: left;" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">其它關鍵字 (選填)</p><textarea class="form-control" style="border-style: none;height: 100px;text-align: left;" name="hashtag_other" spellcheck="true" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">自我介紹</p><textarea class="form-control" style="border-style: none;height: 200px;text-align: left;" name="self_intro" spellcheck="true" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-12" style="border-top-left-radius: 1000;border-style: none;padding: 10px;padding-bottom: 10px;">
                                            <div class="form-group" style="margin-bottom: 0px;background: rgb(239, 241, 246);border-radius: 16px;">
                                                <p style="margin-bottom: 0px;text-align: left;padding-left: 15px;border-radius: 16px;color: rgb(110,113,145);">近三年內代表經歷 <br></p><textarea class="form-control" style="border-style: none;height: 100px;text-align: left;" name="experience" spellcheck="true"></textarea>
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
