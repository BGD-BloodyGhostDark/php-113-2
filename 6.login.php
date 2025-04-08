<?php
   // mysqli_connect() 建立資料庫連結 - 連線到 db4free.net 主機的 immust 資料庫
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
   //mysqli_query() 從資料庫查詢資料 - 查詢 user 資料表中的所有記錄
   $result=mysqli_query($conn, "select * from user");
   
   // mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   // 初始化登入狀態為 FALSE (未登入)
   $login=FALSE;
   
   // 使用 while 迴圈逐筆檢查資料庫中的使用者資料
   while ($row=mysqli_fetch_array($result)) {
     // 比對使用者輸入的帳號密碼是否與資料庫中的某筆記錄相符
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       // 如果找到匹配的帳號密碼，將登入狀態設為 TRUE
       $login=TRUE;
     }
   } 
   
   // 根據登入狀態顯示相應訊息
   if ($login==TRUE)
     // 登入成功時顯示的訊息
     echo "登入成功";
   else
     // 登入失敗時顯示的錯誤訊息
     echo "帳號/密碼 錯誤";
?>