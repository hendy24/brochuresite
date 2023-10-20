<?php

    // Set variables
    $siteurl = "https://" . $_SERVER['SERVER_NAME'];

    $docroot = $_SERVER['DOCUMENT_ROOT'];

    // Get the page name to display the correct page
    $page =  str_replace('/',"", $_SERVER['REQUEST_URI']) . '.php';

    // if this is a post or get then get the page before the ?
    if (str_contains($page,'?')) {
        $page = strtok($page, '?') . ".php";
    }

    // if $page is empty then display the home page
    if ($page == '.php') {
        $page = "home.php";
    };

    // Set site specific info
    $company = "Wichita Falls Drywall";
    $phone = "(490) 555-5555";


    

  