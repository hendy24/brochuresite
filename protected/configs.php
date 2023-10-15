<?php
    // Get the page name to display the correct page
    $page =  str_replace('/',"", $_SERVER['REQUEST_URI']) . '.php';

    if ($page == '.php') {
        $page = "home.php";
    };