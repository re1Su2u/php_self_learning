<?php
include "db.php";
include "func/blog/blog_func.php";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
</head>
<body>
    <h3>Blog Post</h3>

    <a href="blog.php">Blog</a>

    <div>
        <div class="title-frame">
            Title: <br>
            <input type="text">
        </div>
        <div class="body-frame">
            Article: <br>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </div>
        <div class="public-state-frame">
            Public State: <input type="checkbox" name="public-state" id="public-state">
        </div>
    </div>
    
    
</body>
</html>