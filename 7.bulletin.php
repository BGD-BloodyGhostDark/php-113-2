<?php
    // 關閉錯誤報告，避免顯示敏感資訊
    error_reporting(0);
    
    // 建立資料庫連線 - 連線到 db4free.net 主機的 immust 資料庫
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    
    // 查詢 bulletin 資料表中的所有記錄
    $result=mysqli_query($conn, "select * from bulletin");
    
    // 輸出 HTML 表格開頭與表頭
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    
    // 使用 while 迴圈逐筆處理查詢結果
    while ($row=mysqli_fetch_array($result)){
        // 輸出表格行開始
        echo "<tr><td>";
        // 輸出佈告編號 (bid)
        echo $row["bid"];
        echo "</td><td>";
        // 輸出佈告類別 (type)
        echo $row["type"];
        echo "</td><td>"; 
        // 輸出佈告標題 (title)
        echo $row["title"];
        echo "</td><td>";
        // 輸出佈告內容 (content)
        echo $row["content"]; 
        echo "</td><td>";
        // 輸出發佈時間 (time)
        echo $row["time"];
        // 輸出表格行結束
        echo "</td></tr>";
    }
    // 輸出表格結尾
    echo "</table>"
?>