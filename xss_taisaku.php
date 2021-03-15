<?php
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
    <p><?= htmlspecialchars($name, ENT_quiotes);?></p>
    <p><?= htmlspecialchars($mail, ENT_quiotes);?></p>
    <p><?= htmlspecialchars($age, ENT_quiotes);?></p>
    <p><?= htmlspecialchars($fav, ENT_quiotes);?></p>
</body>
</html>