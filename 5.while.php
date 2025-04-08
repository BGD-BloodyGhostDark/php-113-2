<?php
   // mysqli_connect() 建立資料庫連結 - 連線到 db4free.net 的 MySQL 資料庫
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
   // mysqli_query() 從資料庫查詢資料 - 執行 SQL 查詢獲取 user 表所有資料
   $result=mysqli_query($conn, "select * from user");
   
   // mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   // 使用 while 迴圈逐行讀取查詢結果
   while ($row=mysqli_fetch_array($result)) {
     // 輸出每筆資料的 id 和 pwd 欄位，並加上換行標籤
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>