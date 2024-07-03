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
    require("pages/" . $page);
    require('template/footer.php');
