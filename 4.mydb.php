<?php
    // mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    
    // mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    
    // mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);
    
    // 輸出第一筆資料的id和pwd欄位
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    
    // 取得下一筆資料
    $row=mysqli_fetch_array($result);
    
    // 輸出第二筆資料的id和pwd欄位
    echo $row["id"] . " " . $row["pwd"];
?>