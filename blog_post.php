<?php
include "db.php";

session_start();

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

    <form action="blog_post_form.php" method="post">
        <div>
            <div class="title-frame">
                Title: <br>
                <input 
                    type="text"
                    name="title"
                    cols="30">
            </div>
            <div class="body-frame">
                Article: <br>
                <textarea
                    name="body" 
                    id="body" 
                    cols="30" 
                    rows="10">
                </textarea>
            </div>
            <div class="public-state-frame">
                Public State: 
                <input 
                    type="checkbox"
                    name="public-state" 
                    id="public-state" 
                    value="on">
            </div>
        </div>

        <button type="submit">Post</button>
    </form>  
    
</body>
</html>