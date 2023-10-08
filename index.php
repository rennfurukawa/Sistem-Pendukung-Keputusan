<?php
    $project_location = "/Sistem-Pendukung-Keputusan";
    $dir = $project_location;

    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $dir.'/' :
            require "views/home.php";
            break;
        case $dir.'/sipenma' :
            require "views/sipenma.php";
            break;
        case $dir.'/bmi' :
            require "views/bmi.php";
            break;
        case $dir.'/leaderboard' :
            require "views/leaderboard.php";
            break;
        default:
            http_response_code(404);
            echo "Directory not found ! :(";
            break;
    }