<?php
    $mymarks["Database Module"] = 95;
    $mymarks["Networking Module"] = 96;
    $mymarks["Cyber Management Module"] = 97;
    $mymarks["Secure System Module"] = 98;
    $mymarks["Web Development Module"] = 99;
    $mymarks["Forensics Module"] = 100;
    $total = 0;

    foreach ($mymarks as $index => $value)
    {
        $total = $total + $mymarks[$index];
        $average = $total /  6;    
    }
    echo "My Average Mark: ". $average;
?>