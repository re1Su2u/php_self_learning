<?php
include "db.php";
include "blog_func.php"

session_start();
$session_id = session_id();

$title = $_POST["title"];
$article = $_POST["article"];
$status = 0;
if ($_POST["public-state"]) {
    $status = 1;
}

storeBlogPost($con, $title, $article, $status);

echo "<script> location.href='blog.php';</script>";


?>