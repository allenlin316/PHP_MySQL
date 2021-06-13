<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    //echo $_POST["summit"];
    if(!empty($username) && !empty($password)){
        if($username == "abc" && $password == "123"){
            echo "歡迎回來";
        }
        else{
            echo "請重新輸入";
        }
    }
    else{
        echo "帳號或密碼不能為空";
    }   
?>