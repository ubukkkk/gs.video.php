<?php
// おみくじ
    $omi = mt_rand(1,5);
    if("$omi" == 1){
        echo "大吉";
    }else if("$omi" == 2){
        echo "中吉";
    }else if("$omi" == 3){
        echo "小吉";
    }else if("$omi" == 4){
        echo "吉";
    }else if("$omi" == 5){
        echo "凶";
    };

// 関数
    function h($value){
        return htmlspecialchars($value, ENT_QUOTES);
    }  
$name = $_POST["name"];
$age = $_POST["age"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 関数バージョン -->
    <p><?=h($name); ?>さん</p>
    <p><?=h($age); ?>歳</p>
</body>
</html>