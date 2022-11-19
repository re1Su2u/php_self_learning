<?php
    $servername = "localhost";
    $username = "root";
    $password = "kgY!!sRGn99";
    $db = "self_study";

    $con = mysqli_connect($servername, $username, $password, $db);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>