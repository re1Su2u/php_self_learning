<?php
    session_start();

    include "db.php";
    include "func/blog/blog_func.php";
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
    <a href="blog_post.php">Blog Post</a><br>

    <?php
        $posts = getAllPosts($con);
        foreach ($posts as $post):
    ?>
    <div>
        <h3 name="title"><?php echo $post['report_title'] ?></h3>
        <div name="report-id"><?php echo $post['report_id'] ?></div>
        <p>Posted by <?php echo $post['user_name'] ?></p>
        <p><?php echo $post['report_create_day'] ?></p>
        <a href="blog_detail.php">More details...</a>
    </div>
    <?php 
        endforeach
    ?>
    
</body>
</html>