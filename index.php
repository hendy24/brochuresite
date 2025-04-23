<?php 
    // Load config files and functions
    include('protected/functions.php');
    include('protected/configs.php');
    require_once('protected/Libs/MySqlDb.php');
    // require('protected/database.php');
        
    // Display the page content
    require('template/header.php');
    // Display the page based on the url
    // Everything runs through the index.php page
    if (file_exists('pages/' . $page)) {
        require("pages/" . $page);
    } else {
        require("builders/" . $page);
    }
    
    require('template/footer.php');
