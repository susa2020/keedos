<!DOCTYPE html>
<html>
<html lang="zh-tw">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Email 驗證</title>
  <!--
  <link rel="stylesheet" href="https://keedos.me/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link rel="stylesheet" href="https://keedos.me/assets/css/about-susa.css">
  <link rel="stylesheet" href="https://keedos.me/assets/css/Registration-Form-with-Photo.css">
  <link rel="stylesheet" href="https://keedos.me/assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
  <style type="text/css">
  :root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace
}

*,::after,::before {
    box-sizing: border-box
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent
}

article,aside,figcaption,figure,footer,header,hgroup,main,nav,section {
    display: block
}

body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff
}
h1,h2,h3,h4,h5,h6 {
    margin-top: 0;
    margin-bottom: .5rem
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent
}
img {
    vertical-align: middle;
    border-style: none
}
[role=button] {
    cursor: pointer
}
.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6 {
    margin-bottom: .5rem;
    font-weight: 500;
    line-height: 1.2
}

.h1,h1 {
    font-size: 2.5rem
}
.img-fluid {
    max-width: 100%;
    height: auto
}
.container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}
.container,.container-sm {
     max-width:540px
 }
 .container,.container-md,.container-sm {
        max-width:720px
    }
    .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px
}

.col-lg-12,.col-lg-5,.col-lg-6,.col-lg-7,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}
.col-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%
}

.col-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%
}
.col-sm-3 {
     -ms-flex: 0 0 25%;
     flex: 0 0 25%;
     max-width: 25%
 }

 .col-sm-5 {
     -ms-flex: 0 0 41.666667%;
     flex: 0 0 41.666667%;
     max-width: 41.666667%
 }
 .col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%
}

.col-md-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%
}
.col-md-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%
}
.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer
}
.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}
#title-button {
    border-radius: 40px;
    width: 156px;
    background: #f08b33;
    color: rgb(255, 255, 255);
    font-family: FakePearl;
    font-size: 20px;
    height: 56px;
    padding: 15px;
}
body {
    font-family: "FakePearl-Regular" !important;
}
.team-boxed {
    color: #313437;
    background-color: #eef4f7;
}

.team-boxed p {
    color: #7d8285;
}
.team-boxed .people-first, .people {
     padding-right: 0px;
     padding-top: 20px;
     padding-bottom: 50px;
     padding-left: 0px;
 }
 .team-boxed .item {
    text-align: center;
}

.team-boxed .item .box {
    text-align: center;
    padding: 30px;
    background-color: #fff;
    margin-bottom: 30px;
    border-radius: 15px;
}

.team-boxed .item .name {
    font-weight: bold;
    margin-top: 28px;
    margin-bottom: 8px;
    color: inherit;
}
.team-boxed .item .description {
    font-size: 15px;
    margin-top: 15px;
    margin-bottom: 20px;
}

.team-boxed .item img {
    max-width: 160px;
}
.text-center {
    font-family: Poppins;
    font-style: normal;
    font-weight: bold;
    font-size: 32px;
    line-height: 36px;
    align-items: center;
    text-align: center;
    letter-spacing: 1px;
    color: #14142B;
}
.btn:not(:disabled):not(.disabled) {
    font-family: Poppins;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 24px;
    align-items: center;
    text-align: center;
    letter-spacing: 0.75px;
}
*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}


  </style>


</head>


<body>
    <section class="team-boxed" style="background: #eef4f7;">
        <div class="container team">
            <div class="col-md-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 item" style="padding-top: 50px;">
                <div class="box">
                    <div class="row">
                        <div class="col-8 col-sm-5 col-md-4 col-lg-3 col-xl-3" style="padding-bottom: 20px;"><img class="img-fluid" src="https://keedos.me/assets/img/Keedos_full_rectangle.png"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xl-12 offset-xl-0">
                            <h1 class="name" style="text-align: left;">驗證您的電子信箱<br></h1>
                            <p class="description" style="text-align: left;font-size: 18px;">歡迎你使用Keedos!<br>為了確認你是真人，請點擊下方按鈕以開始使用Keedos夥伴搜尋服務，謝謝！<br>Best regards,<br>Keedos<br><br></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-3 col-md-3 col-lg-3 offset-xl-0"><a class="btn btn-primary text-center" role="button" id="title-button" href="" style="font-family: Poppins, sans-serif;">驗證信箱<br></a></div>
                    </div>
                </div>
                <p class="lead" style="text-align: center;"><br>© 2021 Keedos. Team 保留一切權利<br> 還有任何疑問嗎？ 現在就聯絡我們！<br><br></p>
            </div>
        </div>
    </section>

</body>

</html>
