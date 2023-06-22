<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ecommerce";

    $connection = new mysqli($host, $user, $pass, $db);

    if(!$connection)
    {
        echo "Conecction Failed";
    }
?>