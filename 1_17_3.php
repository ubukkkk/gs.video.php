<?php

    include("1_17_2.php");

    $s = '<script>alert("XSS");</script>';
    echo h($s);

?>