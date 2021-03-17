<?php
    // $str_base = "PHP4,PHP5,PHP6,PHP7";
    // // 第1=ターゲット文字, 第2=元の文字列
    // $str = explode(",", $str_base);
    // echo $str[0]."<br>";
    // echo $str[3]."<br>";

    // $str_base = "a,b,c,d";
    // $str = explode(",", $str_base);
    // echo $str[2]."<br>";
    // echo $str[3]."<br>";

    $str_base = "1 2 3 4";
    $str = explode(" ", $str_base);
    echo $str[0]."<br>";
    echo $str[2]."<br>";

    // 配列値を確認するのにvar_dump関数が良いです。
    var_dump($str);

?>