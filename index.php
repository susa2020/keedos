<!DOCTYPE html>
<?php
ob_start();
define('TITLE', "index");
require( $_SERVER['DOCUMENT_ROOT'].'/file_dir_config.php' );
include( VIEW_HEADER );
//include '/assets/layouts/header.php';
//check_logged_out();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <!-- <title>keedos official</title>
  <meta name="description" content="Keedos 是一個為學生打造的人才媒合平台。你可以在這裡存下你參與各種專案的機會，亦或者是透過我們的搜索引擎尋找到最適合和你一起創造奇蹟的夥伴。一起在高中生涯之中創造屬於你我的奇蹟。">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/FakePearl.css">
  <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="../assets/css/about-susa.css">
  <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
  <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
  <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
  <link rel="stylesheet" href="../assets/css/styles.css">    -->
</head>

<body>

  <section class="d-flex flex-column justify-content-between" id="welcome">
    <div>
      <div class="container" id="title-and-button">
        <div class="row">
          <div class="col">
            <h1 id="title">隨時隨地<br>開始你的新旅途!</h1><a class="btn btn-primary text-center" role="button" id="title-button" href="/login">開始使用</a>
          </div>
        </div>
      </div>
    </div>
    <div id="arrow-div">
      <div class="container">
        <div class="row">
          <div class="col arrow-column"><a class="btn btn-link btn-block bounce animated infinite first-arrow-button" role="button" href="#how-to-use"><i class="icon ion-ios-arrow-down first-arrow-button" style="color: rgb(0,0,0);"></i></a></div>
        </div>
      </div>
    </div>
  </section>
  <section id="how-to-use">
    <div class="container list-container">
      <h1 id="work">我們如何運作</h1>
      <div class="row">
        <div class="col-md-4 item">
          <div class="card"><img class="img-fluid card-img-top w-100 d-block" rel="preload" src="/assets/img/undraw_fill_form_re_cwyf%202.svg" style="width: &quot;256.656&quot;;height: &quot;144&quot;;">
            <div class="card-body">
              <h4 class="card-title">填寫履歷</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 item">
          <div class="card" style="border-style: none;"><img class="img-fluid card-img-top w-100 d-block" rel="preload" src="/assets/img/undraw_going_up_ttm5%201.svg" style="width: 256.656;height: 144;">
            <div class="card-body">
              <h4 class="card-title">上傳履歷</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 item">
          <div class="card" style="border-style: none;"><img class="img-fluid card-img-top w-100 d-block" rel="preload" src="/assets/img/undraw_Mailbox_re_dvds%20(1)%201.svg" style="width: 256.656;height: 144;">
            <div class="card-body">
              <h4 class="card-title">等待Email</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 item">
          <div class="card" style="border-style: none;"><img class="img-fluid card-img-top w-100 d-block" rel="preload" src="/assets/img/undraw_Search_re_x5gq%201.svg" style="width: 256.656;height: 144;">
            <div class="card-body">
              <h4 class="card-title">搜尋關鍵字</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 item">
          <div class="card" style="border-style: none;"><img class="img-fluid card-img-top w-100 d-block" rel="preload" src="/assets/img/undraw_personal_info_0okl%201.svg" style="width: 256.656;height: 144;">
            <div class="card-body">
              <h4 class="card-title">查看履歷</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 item">
          <div class="card" style="border-style: none;"><img class="img-fluid card-img-top w-100 d-block" src="/assets/img/undraw_Letter_re_8m03%201.svg" style="width: 256.656;height: 144;">
            <div class="card-body">
              <h4 class="card-title">送出Email</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container first-list">
      <div class="row">
        <div class="col-md-6"><img class="img-fluid" src="/assets/img/undraw_camping_noc8-2%202.svg"></div>
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
          <div class="col-md-6"><img class="img-fluid" src="/assets/img/undraw_online_connection_6778-2%202.svg"></div>
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
            <p>簡單幾個步驟即可註冊好帳號<br>開始你的旅程</p><a href="#">查看更多<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="color: #f08b33;margin-top: -4px;">
                <path d="M15.0378 6.34317L13.6269 7.76069L16.8972 11.0157L3.29211 11.0293L3.29413 13.0293L16.8619 13.0157L13.6467 16.2459L15.0643 17.6568L20.7079 11.9868L15.0378 6.34317Z" fill="currentColor"></path>
              </svg></a>
          </div>
          <div class="col-md-4"><i class="fa fa-star" style="background: url(&quot;../assets/img/04.svg&quot;) center / contain no-repeat;width: 35px;height: 35px;color: rgba(33,37,41,0);font-size: 0px;"></i>
            <h2>自動生成履歷</h2>
            <p>透過回答問卷<br>來完成屬於自己的履歷</p><a href="#">查看更多<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="color: #f08b33;margin-top: -4px;">
                <path d="M15.0378 6.34317L13.6269 7.76069L16.8972 11.0157L3.29211 11.0293L3.29413 13.0293L16.8619 13.0157L13.6467 16.2459L15.0643 17.6568L20.7079 11.9868L15.0378 6.34317Z" fill="currentColor"></path>
              </svg></a>
          </div>
          <div class="col-md-4"><i class="fa fa-star" style="background: url(&quot;../assets/img/3.svg&quot;) center / contain no-repeat;width: 35px;height: 35px;color: rgba(33,37,41,0);font-size: 0px;"></i>
            <h2>人才資料庫</h2>
            <p>透過資料庫中的履歷<br>尋找出最適合的人選</p><a href="#">查看更多<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="color: #f08b33;margin-top: -4px;">
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
        <div class="col text-center align-self-center use"><a class="btn btn-primary" role="button" style="text-align: center;" href="/register">立即使用</a></div>
      </div>

    </div>
  </div>


    <?php
      //require("/assets/layouts/footer.php");
      include( VIEW_FOOTER );
    ?>

  <!--  <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script> -->


    <!-- Install button, hidden by default -->
    <div id="installContainer" class="hidden">
      <button id="butInstall" type="button">
        Install
      </button>
    </div>

    <!-- import the webpage's javascript file -->
    <script src="../script.js" defer></script>


</body>

</html>


</html>
