<?php

    $host = "localhost";
    $db = "slogive";
    $dbuser = "slogive";
    $dbpass = "SrFCf32026483@";

    error_reporting(1);
    
    $conn = new mysqli($host, $db, $dbuser, $dbpass);
    $conn -> set_charset("utf-8");

    if ($conn->conn_error) {
        echo "Nuestro sitio experimenta fallos";
        exit;
    }

?>