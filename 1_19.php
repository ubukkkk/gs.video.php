<?php

    // $s = date("s");
    // if($s >= 30){
    //     echo '<p style = "color:red">30以上</p>';
    // } else{
    //     echo '<p style = "color:blue">29以下</p>';
    // }
    // echo "現在:".$s.'秒';

    $sec = date("s");
    if($s >= 15){
        echo '<p style = "color:yellow">15秒以上経過</p>';
    } else {
        echo '<p style = "color:purple">15秒未達</p>';
    }
    echo "現在".$sec.'秒です';

?>