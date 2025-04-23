<?php 
    $currentPage = basename($_SERVER['PHP_SELF']);
    if ($currentPage == 'index.php') {
        $pageTitle = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBC Real Estate | Utah New Construction Experts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-------------------------- Shadowbox plugin --------------------------->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="../images/tbcrealestate_logo.png" height="95px" alt="TBC Real Estate Logo">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php echo ($page == 'home.php') ? 'active' : '';?>">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item <?php echo ($page == 'for-builders.php') ? 'active' : '';?>">
                        <a class="nav-link" href="/for-builders">For Builders</a>
                    </li>
                    <li class="nav-item <?php echo ($page == 'home-buyers.php') ? 'active' : '';?>">
                        <a class="nav-link" href="/home-buyers">Home Buyers</a>
                    </li>
                    <li class="nav-item <?php echo ($page == 'areas-we-serve.php') ? 'active' : '';?>">
                        <a class="nav-link" href="/areas-we-serve">Areas We Serve</a>
                    </li>
                    <li class="nav-item <?php echo ($page == 'contact-us.php') ? 'active' : '';?>">
                        <a class="nav-link" href="/contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
