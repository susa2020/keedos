# Keedos

# 資料庫

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
└───contact
└───dashboard
└───home
└───index
└───login
└───logout
└───profile-edit
└───profile
└───register
└───reset-password
└───verify
└───index.php     
│    .   
│    .
│    .
```

# 更新歷程
2021.02.03 SQL連接測試
