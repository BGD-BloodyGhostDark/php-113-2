<?php
    // 啟動 session 功能，確保可以存取 session 變數
    session_start();
    
    // 刪除 session 中的 counter 變數，實現重置功能
    unset($_SESSION["counter"]);
    
    // 顯示重置成功訊息
    echo "counter重置成功....";
    
    // 使用 meta 標籤設定 2 秒後自動跳轉回計數器頁面 (8.counter.php)
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>