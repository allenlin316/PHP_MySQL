<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登入系統</title>
</head>
<body>
    <?php
      echo "登入系統" . "<br>";  
    ?>
    <!--
    html傳輸資料可⽤ <form></form>標籤    
    HTTP request method : HTTP 求⽅法
    -->
    <form action="check.php" method="post"> 
        帳號: <input type="text" name="username"><br>
        密碼: <input type="password" name="password"><br>
        <button type="summit" name="summit"> 登入</button>
</form>
</body>
</html>