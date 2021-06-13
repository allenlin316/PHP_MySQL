<?php

    $dbServer = 'localhost';
    $dbName = 'loginsystem';
    $dbUsername = 'root';
    $dbpassword = '';
   
    $username = $_POST['username'];
    $password = $_POST['password'];

    //與database做連結
    $db = mysqli_connect($dbServer,$dbUsername,$dbpassword,$dbName);
    $query = "SELECT * FROM `profile` WHERE `username`='$username' AND `password`='$password' ";
    $result = mysqli_query($db,$query);
    $value = mysqli_fetch_all($result);
    
    #print_r($value);

    if(!empty($username) && !empty($password)){
        if(!empty($value))
            echo "歡迎回來" . $value[0][1];
        else
            echo "請重新輸入";
    }
    else
        echo "Cannot be empty";
?>