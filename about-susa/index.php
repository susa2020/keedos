<!DOCTYPE html>
<?php

define('TITLE', "index");
include '../assets/layouts/header.php';
check_logged_out();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

</head>

<body>
  <div class="susa-banner"></div>
  <div id="intro">
      <div class="container intro-container" style="text-align: center;">
          <h1 style="font-family: FakePearl;">What is SUSA</h1>
          <p style="font-family: FakePearl;color: #6b737b;">我們是個高中生新創團隊，致力於<br>1. 推動學生創業<br>2. 以學生創業為主軸分享成功者經驗<br>3. 提供資源平台幫助學生們實行創業發想<br></p>
      </div>
  </div>
  <section class="team-boxed" style="background: #eef4f7;">
      <div class="container team">
          <div class="intro">
              <h2 class="text-center" style="font-family: FakePearl;">Our Team </h2>
              <p class="text-center" style="font-family: FakePearl;">我們是一群對軟體設計及商業開發有興趣而聚集在一起的學生<br>團隊成員來自於台灣北中南各地、美國、和香港，大多數成員都是高中生。<br></p>
          </div>
          <div class="row people-first">
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle img-fluid" src="../assets/img/20A1E0D2-219E-439F-B152-23B260EDA130_1_201_a.jpeg">
                      <h3 class="name">陳咨文</h3>
                      <p class="title">Tech lead (front-end), Co-founder</p>
                      <p class="description">WHS '21<br>Love watching movies( Marvel fann!!!) &amp; TV shows (WandaVision, Breaking Bad, MacGyver...), <br>making vlogs, <br>playing games (board games, video games, anything that is fun)</p>
                      <div class="social"><a href="https://www.facebook.com/profile.php?id=100009961848667" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/twchen0630/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/imageterry.jpg">
                      <h3 class="name">王甫瑄</h3>
                      <p class="title">CEO, Co-founder</p>
                      <p class="description">來自新竹的高中生<br>一個喜歡從0開始，找到並解決問題的人<br>擅長品牌設計與電子插畫</p>
                      <div class="social"><a href="https://www.facebook.com/terry.wang.20040119" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a target="_blank" href="https://instagram.com/tofus7.45?igshid=1wdctu7sznjz3"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/3.jpg">
                      <h3 class="name">鄭佳瑜</h3>
                      <p class="title">PM of innoforest, Co-founder</p>
                      <p class="description">此人還在努力構思<br>再等等</p>
                      <div class="social"><a href="https://www.facebook.com/profile.php?id=100001320536194" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/monica.c1124/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/1.jpg">
                      <h3 class="name">林橋毅</h3>
                      <p class="title">Tech lead (Back-end)</p>
                      <p class="description">此人還在努力構思<br>再等等</p>
                      <div class="social"><a href="https://www.facebook.com/profile.php?id=100009437366334" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/ucangodiedie0213/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/imagebrian.jpg">
                      <h3 class="name">周書弘</h3>
                      <p class="title">PM OF Keedos</p>
                      <p class="description">水獺愛吃吃<br>沒事喜歡看yt <br>還有各種電影 </p>
                      <div class="social"><a href="https://www.facebook.com/brianchou452" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/brianchou452/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/imageirene.jpg">
                      <h3 class="name">張乃云</h3>
                      <p class="title">Executive &amp; Editor</p>
                      <p class="description">#可愛小吃貨<br>#學權交際仔<br>#yt 重度沈迷</p>
                      <div class="social"><a href="https://www.facebook.com/profile.php?id=100010613739881" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/irene.chang0207/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/imagetinglu2.jpg">
                      <h3 class="name">郭亭鷺</h3>
                      <p class="title">ADmin &amp; Copywriter</p>
                      <p class="description">沈迷於嗑cp的女子(⁎⁍̴̛ᴗ⁍̴̛⁎) <br>在法律路上跌跌撞撞中⋯ </p>
                      <div class="social"><a href="https://www.facebook.com/profile.php?id=100003951521187" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/aliens_camille_2714/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/2.jpg">
                      <h3 class="name">洪啟翔</h3>
                      <p class="title">Design lead</p>
                      <p class="description">此人還在努力構思<br>再等等<br></p>
                      <div class="social"><a href="https://www.facebook.com/profile.php?id=100009282737389" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/hungsean.3454/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/3.jpg">
                      <h3 class="name">傅詩涵</h3>
                      <p class="title">Social Media manager</p>
                      <p class="description">此人還在努力構思<br>再等等<br></p>
                      <div class="social"><a href="https://www.facebook.com/profile.php?id=100009970290045" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/no.b_o.dy/?igshid=1arqgxz0xc8y5" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/imageYang.jpg">
                      <h3 class="name"><strong>楊承勳</strong></h3>
                      <p class="title">Front-end Engineer</p>
                      <p class="description">我是楊承勳，興趣是桌球、物理，平常喜歡寫些前端特效自娛自樂。<br>於再興中學擔任學生，在原分所擔任實習生，在SUSA擔任前端工程師 </p>
                      <div class="social"><a href="https://www.facebook.com/profile.php?id=100015417342475" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/1708992taiwan/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/2.jpg">
                      <h3 class="name">張智堯</h3>
                      <p class="title">IOS lead, Back-end engineer</p>
                      <p class="description">此人還在努力構思<br>再等等<br></p>
                      <div class="social"><a href="https://www.facebook.com/HQXiaoBai" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/chihyao_0928/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <div class="box"><img class="rounded-circle" src="../assets/img/3.jpg">
                      <h3 class="name">何嘉柚</h3>
                      <p class="title">Front-end &amp; Back-end engineer</p>
                      <p class="description">此人還在努力構思<br>再等等<br></p>
                      <div class="social"><a href="https://www.facebook.com/ho.steve.77" target="_blank"><i class="fa fa-facebook-official"></i></a><a href="#"></a><a href="https://www.instagram.com/evan.12.23/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <div id="back-keedos" style="background: #eef4f7;">
      <div class="container">
          <div class="row justify-content-center align-items-center">
              <div class="col-md-4"><a class="btn btn-primary btn-block btn-lg" role="button" style="border-radius: 8px;" href="../index">Back to Keedos</a></div>
          </div>
      </div>
  </div>


    <?php
      require("../assets/layouts/footer.php");
    ?>


</body>

</html>


</html>
