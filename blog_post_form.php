<?php
    include "db.php";
    include "func/blog/blog_func.php";

    session_start();

    $title = $_POST["title"];
    $article = $_POST["body"];
    $status = 0;
    if (!empty($_POST["public-state"])) {
        $status = 1;
    }

    // Insert blog data into the report table
    $result = storeBlogPost($con, $title, $article, $status);

    // Move to a blog list page
    if ($result) {
        echo "<script> location.href='blog.php';</script>";
    } else {
        echo "<script> location.href='blog_post.php';</script>";
    }
?>