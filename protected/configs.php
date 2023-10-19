<?php
    // Get the page name to display the correct page
    $page =  str_replace('/',"", $_SERVER['REQUEST_URI']) . '.php';

    // if this is a post or get then get the page before the ?
    if (str_contains($page,'?')) {
        $page = strtok($page, '?') . ".php";
    }

    if ($page == '.php') {
        $page = "home.php";
    };

  