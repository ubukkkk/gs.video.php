<?php

    $sec = date("s");
    if($sec <= 19){
        echo    '<p style = "background-color:red; color:white">うひ</p>';
    } else if($sec >= 20 && $sec <=39){
        echo    '<p style = "background-color:green; color:gray">うひ</p>';
    } else if($sec >= 40 && $sec <=59){
        echo    '<p style = "background-color:blue; color:white">うひ</p>';
}

?>