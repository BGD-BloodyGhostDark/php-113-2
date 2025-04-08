<?php
    // 啟動 session 功能，確保可以存取 session 變數
    session_start();
    
    // 清除 session 中的使用者 id，實現登出功能
    unset($_SESSION["id"]);
    
    // 顯示登出成功訊息
    echo "登出成功....";
    
    // 使用 meta 標籤設定 3 秒後自動跳轉回登入頁面 (2.login.html)
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>