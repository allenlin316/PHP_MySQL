<?php
    echo "Hello World";
    echo "<br>"; //break (換行)
    echo "我是測試!" . "<br>";

    for($i=1; $i<10; $i++){
        for($j=1; $j<10; $j++){
            echo "<tr>";
            echo $i . "*" . $j . "=" . $i*$j;
        }
        echo "<br>";
    }





    /*$temp = -4;
    echo "體溫: " . $temp . "<br>"; // .像c++的加號

    if($temp>37.5){
        echo "你發燒了";
    }
    elseif($temp >= 35){
        echo "正常體溫";
    }
    else{
        echo "你不是人";
    }*/
?>