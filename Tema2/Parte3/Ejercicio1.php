<?php
    $hora=$_POST["hora"];

    if($hora >= 6 && $hora <= 12) {
        echo "Buenos días.";
    } else {
        if($hora >= 13 && $hora <= 20) {
            echo "Buenos tardes.";
        } else {
            echo "Buenos noches.";
        }
    }
?>