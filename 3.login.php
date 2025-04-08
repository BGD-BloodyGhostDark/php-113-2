<?php 
    // 檢查使用者輸入的帳號(id)是否為"john"且密碼(pwd)是否為"john1234"
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        // 若帳密正確，顯示登入成功訊息
        echo "登入成功";
    else
        // 若帳密錯誤，顯示登入失敗訊息
        echo "登入失敗";
?>