<?php
   // mysqli_connect() 建立資料庫連結 - 連線到 db4free.net 的 MySQL 資料庫
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
   // mysqli_query() 從資料庫查詢資料 - 取得 user 資料表所有記錄
   $result=mysqli_query($conn, "select * from user");
   
   // mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   // 初始化登入狀態為 FALSE (未登入)
   $login=FALSE;
   
   // 使用 while 迴圈檢查每一筆使用者資料
   while ($row=mysqli_fetch_array($result)) {
     // 比對使用者輸入的帳號密碼是否與資料庫記錄相符
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       // 若找到匹配的帳號密碼，設定登入狀態為 TRUE
       $login=TRUE;
     }
   } 
   
   // 檢查登入狀態
   if ($login==TRUE) {
    // 啟動 session 功能
    session_start();
    // 將使用者帳號存入 session 變數
    $_SESSION["id"]=$_POST["id"];
    // 顯示登入成功訊息
    echo "登入成功";
    // 3秒後自動跳轉至公告系統頁面 (11.bulletin.php)
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }
   else{
    // 顯示登入失敗訊息
    echo "帳號/密碼 錯誤";
    // 3秒後自動跳轉回登入頁面 (2.login.html)
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
   }
?>