<?php

/** Functions used on blog */

// Getting all posts
function getAllPosts($conn) {
    $sql = 'SELECT * FROM blog';
    $result = mysqli_query($conn, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

function storeBlogPost() {
    ## sample
}

?>