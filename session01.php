<?php

session_start();
$_SESSION["name"] = "うぶかた";
$_SESSION["num"] = 1000;

echo $_SESSION["name"];
echo $_SESSION["num"];


?>