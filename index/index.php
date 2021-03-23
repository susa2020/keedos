<!DOCTYPE html>
<?php

define('TITLE', "index");
//include '../assets/layouts/header.php';
//check_logged_out();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>keedos official</title>
    <meta name="description" content="Keedos 是一個為學生打造的人才媒合平台。你可以在這裡存下你參與各種專案的機會，亦或者是透過我們的搜索引擎尋找到最適合和你一起創造奇蹟的夥伴。一起在高中生涯之中創造屬於你我的奇蹟。">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/FakePearl.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <section id="welcome">
      <nav class="navbar navbar-light navbar-expand-md" style="padding: 8px;padding-right: 50px;padding-left: 50px;padding-top: 8px;padding-bottom: 8px;">
          <div class="container-fluid"><a class="navbar-brand" href="../index"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navcol-1">
                  <ul class="navbar-nav">
                      <li class="nav-item"><a class="nav-link active about" style="color: #18191f;font-size: 14px;width: 90px;padding: 0px;padding-top: 12px;font-family: FakePearl;" href="about-susa.html">About SUSA</a></li>
                      <li class="nav-item working"><a class="nav-link working" style="color: #18191f;font-size: 15px;padding: 0px;width: 70px;font-family: FakePearl;" href="#how-to-use">運作方式</a></li>
                  </ul><span class="ml-auto navbar-text actions"> <a class="login" href="../login">登入</a><a class="btn btn-light action-button" role="button" href="../register">註冊</a></span>
              </div>
          </div>
      </nav>
        <div class="container" id="title-and-button">
            <div class="row">
                <div class="col">
                    <h1 id="title">隨時隨地<br>開始你的新旅途!</h1><a class="btn btn-primary text-center" role="button" id="title-button" href="../login">開始使用</a>
                </div>
            </div>
        </div>
    </section>
    <section id="how-to-use">
        <div class="container list-container">
            <h1 id="work">我們如何運作</h1>
            <div class="row">
                <div class="col-md-4 item">
                    <div class="card"><img class="img-fluid card-img-top w-100 d-block" src="../assets/img/undraw_fill_form_re_cwyf%202.svg">
                        <div class="card-body">
                            <h4 class="card-title">填寫履歷</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="card" style="border-style: none;"><img class="img-fluid card-img-top w-100 d-block" src="../assets/img/undraw_going_up_ttm5%201.svg">
                        <div class="card-body">
                            <h4 class="card-title">上傳履歷</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="card" style="border-style: none;"><img class="img-fluid card-img-top w-100 d-block" src="../assets/img/undraw_Mailbox_re_dvds%20(1)%201.svg">
                        <div class="card-body">
                            <h4 class="card-title">等待Email</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 item">
                    <div class="card" style="border-style: none;"><img class="img-fluid card-img-top w-100 d-block" src="../assets/img/undraw_Search_re_x5gq%201.svg">
                        <div class="card-body">
                            <h4 class="card-title">搜尋關鍵字</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="card" style="border-style: none;"><img class="img-fluid card-img-top w-100 d-block" src="../assets/img/undraw_personal_info_0okl%201.svg">
                        <div class="card-body">
                            <h4 class="card-title">查看履歷</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="card" style="border-style: none;"><img class="img-fluid card-img-top w-100 d-block" src="../assets/img/undraw_Letter_re_8m03%201.svg">
                        <div class="card-body">
                            <h4 class="card-title">送出Email</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container first-list">
            <div class="row">
                <div class="col-md-6"><img class="img-fluid" src="../assets/img/undraw_camping_noc8-2%202.svg"></div>
                <div class="col-md-6 list-item">
                    <h1>冒險 由此開始</h1>
                    <h3><i class="fa fa-circle" style="font-size: 6px;color: #A0DCFF;border-style: none;margin-right: 10px;padding: 0px;vertical-align: middle;"></i>單打獨鬥，不如團隊合作</h3>
                    <p>當想做某件事情卻因為只有一個人而放棄？<br>在這裡可以找到你中意的團隊</p>
                    <h3><i class="fa fa-circle" style="font-size: 6px;color: #FFC3D8;border-style: none;margin-right: 10px;padding: 0px;vertical-align: middle;"></i>履歷???</h3>
                    <p>我們提供一個問卷的方式填履歷<br>花個十分鐘就可以製作出屬於自己的履歷</p>
                    <h3><i class="fa fa-circle" style="font-size: 6px;color: #C1E5C0;border-style: none;margin-right: 10px;padding: 0px;vertical-align: middle;"></i>找到與你合拍的團隊</h3>
                    <p>對於一個剛起步的學生組織而言，人資幾乎是每一個團隊都會遇到的問題。我們透過這種方式大大地節省了你們的時間</p>
                </div>
            </div>
        </div>
        <div id="second-list">
            <div class="container first-list">
                <div class="row">
                    <div class="col-md-6"><img class="img-fluid" src="../assets/img/undraw_online_connection_6778-2%202.svg"></div>
                    <div class="col-md-6 list-item">
                        <h1>從現在開始連結世界</h1>
                        <h3><i class="fa fa-circle" style="font-size: 6px;color: #A0DCFF;border-style: none;margin-right: 10px;padding: 0px;vertical-align: middle;"></i>簡單易用的功能</h3>
                        <p>你可以在這裡找到你的隊友，並開始你的冒險</p>
                        <h3><i class="fa fa-circle" style="font-size: 6px;color: #FFC3D8;border-style: none;margin-right: 10px;padding: 0px;vertical-align: middle;"></i>屬於你的機會</h3>
                        <p>我們是簡化過後的獵頭網站，降低學生的使用門檻</p>
                        <h3><i class="fa fa-circle" style="font-size: 6px;color: #C1E5C0;border-style: none;margin-right: 10px;padding: 0px;vertical-align: middle;"></i>找到與你合拍的隊友</h3>
                        <p>對於一個剛起步的學生組織而言，人資幾乎是每一個團隊都會遇到的問題。我們透過這種方式大大地節省了你們的時間</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="feature">
        <div>
            <div class="container">
                <h1>探索特色功能</h1>
                <div class="row">
                    <div class="col-md-4"><i class="fa fa-star" style="background: url(&quot;../assets/img/1.svg&quot;) center / contain no-repeat;width: 35px;height: 35px;color: rgba(33,37,41,0);font-size: 0px;"></i>
                        <h2>簡單的流程</h2>
                        <p>簡單幾個步驟即可註冊好帳號<br>開始你的旅程</p><a href="#">查看更多<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="color: #f08b33;font-size: 23px;margin-top: -4px;">
                                <path d="M15.0378 6.34317L13.6269 7.76069L16.8972 11.0157L3.29211 11.0293L3.29413 13.0293L16.8619 13.0157L13.6467 16.2459L15.0643 17.6568L20.7079 11.9868L15.0378 6.34317Z" fill="currentColor"></path>
                            </svg></a>
                    </div>
                    <div class="col-md-4"><i class="fa fa-star" style="background: url(&quot;../assets/img/04.svg&quot;) center / contain no-repeat;width: 35px;height: 35px;color: rgba(33,37,41,0);font-size: 0px;"></i>
                        <h2>自動生成履歷</h2>
                        <p>透過回答問卷 <br>來完成屬於自己的履歷</p><a href="#">查看更多<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="color: #f08b33;font-size: 23px;margin-top: -4px;">
                                <path d="M15.0378 6.34317L13.6269 7.76069L16.8972 11.0157L3.29211 11.0293L3.29413 13.0293L16.8619 13.0157L13.6467 16.2459L15.0643 17.6568L20.7079 11.9868L15.0378 6.34317Z" fill="currentColor"></path>
                            </svg></a>
                    </div>
                    <div class="col-md-4"><i class="fa fa-star" style="background: url(&quot;../assets/img/3.svg&quot;) center / contain no-repeat;width: 35px;height: 35px;color: rgba(33,37,41,0);font-size: 0px;"></i>
                        <h2>人才資料庫</h2>
                        <p>透過資料庫中的履歷<br> 尋找出最適合的人選</p><a href="#">查看更多<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="color: #f08b33;font-size: 23px;margin-top: -4px;">
                                <path d="M15.0378 6.34317L13.6269 7.76069L16.8972 11.0157L3.29211 11.0293L3.29413 13.0293L16.8619 13.0157L13.6467 16.2459L15.0643 17.6568L20.7079 11.9868L15.0378 6.34317Z" fill="currentColor"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="start">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>從現在開始連結世界 </h1>
                </div>
            </div>
            <div class="row use">
                <div class="col text-center align-self-center use"><a class="btn btn-primary" role="button" style="text-align: center;" href="../register">立即使用</a></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p style="text-align: center;color: #ffffff;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-check2-circle" style="margin-right: 14px;margin-top: -1px;color: #ffffff;">
                            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                            <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"></path>
                        </svg>Fully organized UI components</p>
                </div>
                <div class="col-md-4">
                    <p style="text-align: center;color: #ffffff;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-check2-circle" style="margin-right: 14px;margin-top: -1px;color: #ffffff;">
                            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                            <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"></path>
                        </svg>License to use on multiple projects</p>
                </div>
                <div class="col-md-4">
                    <p style="text-align: center;color: #ffffff;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-check2-circle" style="margin-right: 14px;margin-top: -1px;color: #ffffff;">
                            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                            <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"></path>
                        </svg>Clean, Minimal &amp; Modern Design</p>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>
<?php
require("../assets/layouts/footer.php");
?>

</html>
