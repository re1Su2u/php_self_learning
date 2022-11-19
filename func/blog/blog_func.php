<?php
/** 
 * Functions used on blog page
 */

// Getting all posts
function getAllPosts($conn) {
    $sql = 'SELECT * FROM report INNER JOIN user ON report.author = user.user_id';
    $result = mysqli_query($conn, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

// Inserting ariticle in report
function storeBlogPost($conn, $title, $article, $status) {
    $current_time = date("Y/m/d");
    $sql = "NSERT INTO report ('title', 'body', 'author) values (" . $title . ", " . $article . ", " . $_SESSION['db']['user_id'] . ", " . $status .")";
    $result = mysqli_query($conn, $sql);
}

?>