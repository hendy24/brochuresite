<?php

// Get or create a post by the name
function getPost($postTitle = null) {
    $post = fopen($postTitle . ".txt", "w");

    $post = array(
        'name' => "Reasons to Finish Your Basement",
        'date' => "2023-10-17",
        'image' => "filename.jpg",
        'content' => "This is the post content..."
    );

    print_r($post);

    return $post;
}

function pr ($var) {
    echo '<div id="debug">';
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    echo '</div>';
    echo '<div class="clear"></div>';
}

function input() {
    if (!empty($_POST)) {
        $input = $_POST;
    } elseif (!empty($_GET)) {
        $input = $_GET;
    } else {
        $input = "";
    }

    return $input;
}
