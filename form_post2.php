<?php
// 関数
    function h($value){
        return htmlspecialchars($value, ENT_QUOTES);
    }
    
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$fav = $_POST["fav"];
// echo $name."<br>";
// echo $mail."<br>";
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
    <p><?=$name?></p>
    <p><?=$mail?></p>
    <p><?=$age?></p>
    <p><?=$fav?></p>

    <!-- XSS対策 -->
    <p><?= htmlspecialchars($name, ENT_QUOTES); ?></p>
    <p><?= htmlspecialchars($mail, ENT_QUOTES); ?></p>
    <p><?= htmlspecialchars($age, ENT_QUOTES); ?></p>
    <p><?= htmlspecialchars($fav, ENT_QUOTES); ?></p>
    
    <!-- 関数バージョン -->
    <p><?=h($name); ?></p>
    <p><?=h($mail); ?></p>
    <p><?=h($age); ?></p>
    <p><?=h($fav); ?></p>

</body>
</html>