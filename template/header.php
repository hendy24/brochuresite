<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($metaTag); ?>">

    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <link rel="icon" type="image/webp" href="/favicon.webp">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">    <link rel="stylesheet" type="text/css" href="styles/main.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NPT1QNYN9P"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-NPT1QNYN9P');
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="<?php echo BASE_URL; ?>">
                <img src="<?php echo IMAGES; ?>/logo.webp" height="95px" alt="Priority Homes Logo">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php echo ($page == 'home.php') ? 'active' : '';?>">
                        <a class="nav-link text-dark" href="<?php echo BASE_URL; ?>">Home</a>
                    </li>
                        <a class="nav-link text-dark" href="<?php echo BASE_URL; ?>/contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
