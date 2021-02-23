# Keedos

# 資料庫
詳見HackMD

## 學生User
* ID
* 姓名
* email
* 密碼
* Google_AUTH
* FB_AUTH
* 我的最愛

## 組織User 
* ID
* 姓名
* email
* 密碼
* Google_AUTH
* FB_AUTH
* 我的最愛
      

## 履歷
* ID
* 照片連結
* 姓名
* 性別
* 年齡
* 地區
* 學校(校系)
* 電話
* email
* 自傳
* 工作經歷
* 希望職稱
* 擅長的事
* HashTag
* 偏好工作時間
* 社群連結
               

# 檔案架構

如有新增檔案請自行於下面增加，並說明用途。

##檔案命名原則

所有登入系統或搜尋系統的原始碼如需更改請先將原始檔案複製一份並重新命名為
“原檔名 old”。 e.g. 原檔名為index.php 請複製一份原檔並命名index old.php

##檔案目錄
```
keedos
└───assets  //素材（開場動畫、圖片
│      └───bootstrap //勿動
│      └───css
│      │    └───Login-Form-Clean.css//登入 註冊頁表單css
│      │    └───Navigation-with-Search.css//navigation bar
│      │    └───Registration-Form-with-Photo.css
│      │    └───app.css //登入系統原始css
│      │    └───resumelist.css
│      │    └───smoothproducts.css//bootstrap studio生成 但不知道用在哪
│      │    └───styles.css//網頁自訂css 目前存放粉圓體cdn 及全站套用字型
│      └───fonts//bootstrap studio 網頁字型
│      └───images//登入系統預設image location 圖片請存img
│      └───img
│      │    └───avatars//bootstrap studio預設圖片 未來可刪
│      │    └───logo//keedos 的各種 logo
│      │    └───scenery//bootstrap studio預設圖片 未來可刪
│      │    └───tech//bootstrap studio預設圖片 未來可刪
│      │    └───Back.svg//login,register,忘記密碼 頁面的返回圖檔
│      │    └───meeting.jpg//bootstrap studio預設圖片 未來可刪
│      └───includes//登入系統include folder
│      └───js//包含bootstrap studio,登入系統檔案
│      └───layouts//navigation bar,footer,header(務必include header 確保登入系統常運作 
│      │             ps. include header 即會include nav bar) 
│      │
│      └───setup//登入系統 環境設定（db,email info)
│      └───uploads/users //登入系統使用者上傳圖檔存放處
│      └───vandor //登入系統預設bootstrap,js,css.....
└───contact //聯絡表單
└───dashboard //未開發的super user 功能
└───home //登入後預設跳轉頁面
└───index //為解決 index.php在根目錄無法include assets 的問題
└───login //登入 已完成勿隨意更改
└───logout //登出 網址/logout 即可登出
└───profile-edit //個人資料編輯
└───profile //個人資料
└───register //註冊 已完成勿隨意更改
└───reset-password //密碼重設 已完成勿隨意更改
└───verify //email驗證,email模板
└───welcome //歡迎頁 
└───index.php     
│    .   
│    .
│    .
```

# 更新歷程
2021.02.03 SQL連接測試
