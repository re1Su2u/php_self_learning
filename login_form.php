<?php
    include "db.php";

    session_start();

    $sessionid = session_id();

    // Asign form values
    $posted_id = $_POST["id-form"];
    $posted_password = $_POST["pass-form"];

    $sql_select_id = "SELECT `user_name` FROM user WHERE `user_name` = '$posted_id'";
    $result_select_id = $con->query($sql_select_id);

    if ($result_select_id->num_rows > 0) {
        $id = $result_select_id->fetch_assoc()["id"];

        $sql_select_password = "SELECT `user_name` FROM user WHERE `password` = '$posted_password'";
        $result_select_password = $con->query($sql_select_password);

        if ($result_select_password->num_rows > 0) {
            // Create db info session
            $sql_select_user = "SELECT * FROM user WHERE `user_name` = '$posted_id' AND `password` = '$posted_password'";
            $result_select_user = $con->query($sql_select_user);
            $_SESSION['db'] = $result_select_user->fetch_assoc();


            echo "<script> location.href='top.php';</script>";
        } else {
            echo "<script> location.href='login.php';</script>";
        }
    } else {
        echo "<script> location.href='login.php';</script>"; 
    }
?>