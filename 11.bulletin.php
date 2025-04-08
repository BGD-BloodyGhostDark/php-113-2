<?php
    // 關閉錯誤報告，避免顯示敏感資訊
    error_reporting(0);
    
    // 啟動 session 功能，檢查使用者登入狀態
    session_start();
    
    // 檢查是否有登入的 session id
    if (!$_SESSION["id"]) {
        // 若未登入，顯示提示訊息
        echo "請先登入";
        // 3秒後跳轉至登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        // 顯示歡迎訊息和使用者功能連結 (登出、管理使用者、新增佈告)
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        
        // 建立資料庫連線
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        
        // 查詢 bulletin 資料表中的所有記錄
        $result=mysqli_query($conn, "select * from bulletin");
        
        // 輸出佈告欄表格 (含表頭)
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        
        // 使用 while 迴圈處理每一筆佈告資料
        while ($row=mysqli_fetch_array($result)){
            // 輸出每筆佈告的操作連結 (修改、刪除) 和各欄位資料
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];          // 佈告編號
            echo "</td><td>";
            echo $row["type"];         // 佈告類別
            echo "</td><td>"; 
            echo $row["title"];        // 標題
            echo "</td><td>";
            echo $row["content"];      // 佈告內容
            echo "</td><td>";
            echo $row["time"];         // 發佈時間
            echo "</td></tr>";
        }
        echo "</table>";
    }
?>