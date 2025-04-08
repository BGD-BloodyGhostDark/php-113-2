<?php
    // 啟動 session 功能，用於跨頁面保存資料
    session_start();
    
    // 檢查是否已設定 counter 變數
    if (!isset($_SESSION["counter"]))
        // 若未設定，初始化 counter 為 1
        $_SESSION["counter"]=1;
    else
        // 若已設定，將 counter 值加 1
        $_SESSION["counter"]++;

    // 顯示當前計數器值
    echo "counter=".$_SESSION["counter"];
    
    // 提供重置計數器的連結
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>