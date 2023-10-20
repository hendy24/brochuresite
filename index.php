<?php 
    // Load config files and functions
    include('protected/functions.php');
    include('protected/configs.php');
        
    // Display the page content
    require('template/header.php');
    // Display the page based on the url
    // Everything runs through the index.php page
    require($docroot . "/pages/" . $page);
    require('template/footer.php');
