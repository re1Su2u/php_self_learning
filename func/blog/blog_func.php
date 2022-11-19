<?php
/** 
 * Functions used on blog page
 */

// Getting all posts
function getAllPosts($conn) {
    $sql = "SELECT 
            report.report_id as report_id, 
            report.title as report_title, 
            report.body as report_body, 
            report.author, 
            report.public_state, 
            report.created_at as report_create_day, 
            report.updated_at as report_update_day,
            user.user_id,
            user.user_name
            FROM report as report
            INNER JOIN user as user ON report.author = user.user_id";
    $result = mysqli_query($conn, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

// Inserting ariticle in report
function storeBlogPost($conn, $title, $article, $status) {
    $current_time = date("Y/m/d");
    $sql = "INSERT INTO report (title, body, author, public_state) 
            values ('" . $title . "', '" . $article . "', " . $_SESSION['db']['user_id'] . ", " . $status .")";
    
    return $conn->query($sql);
}

?>