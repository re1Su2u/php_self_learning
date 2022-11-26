<?php
    session_start();

    include "db.php";
    include "func/blog/blog_func.php";

    $report_id = $_GET['report_id'];
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

    <?php
        $post = getPostDetail($con, $report_id);
    ?>

    <div>
        <h3 name="title"><?php echo $post[0]['report_title'] ?></h3>
        <div name="report-id">Report No.<?php echo $post[0]['report_id'] ?></div>
        <p>Posted by <?php echo $post[0]['user_name'] ?></p>
        <p><?php echo $post[0]['report_create_day'] ?></p>
        <p><?php echo $post[0]['report_body'] ?></p>
    </div>
    
</body>
</html>