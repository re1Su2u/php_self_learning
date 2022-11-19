<?php
    session_start();

    include "db.php";
    include "func/blog/blogFunc.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
</head>
<body>
    <h3>Blog Page</h3>

    <!-- Articles are showed on this page. -->

    <a href="blog-post.php">Blog Post</a><br>

    <?php
        $posts = getAllPosts($con);

        foreach ($posts as $post): ?>
            <div >
                <h3><?php print $post['title'] ?></h3>
                <p>Posted by <?php print $post['id'] ?></p>
                <p><?php print $post['created_at'] ?></p>


            </div>
    <?php endforeach ?>
    
</body>
</html>