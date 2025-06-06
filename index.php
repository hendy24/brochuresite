<?php
declare(strict_types=1);

// 1) Bootstrap
require_once __DIR__ . '/protected/functions.php';
require_once __DIR__ . '/protected/configs.php';  // defines $page from REQUEST_URI


// 2) Allowlisted pages or valid file fallback
$standardContent = __DIR__ . '/pages/' . $page . '.php';
$landingContent  = __DIR__ . '/landing_pages/' . $page . '.php';

if (!file_exists($standardContent) && !file_exists($landingContent)) {
    http_response_code(404);
    $page = '404';
}

// 3) Page Titles and Meta (optional customization)
switch ($page) {
    case 'home':
        $pageTitle = 'New Townhomes for Sale in Nephi, Utah | Priority Homes';
        $metaTag = 'Explore energy-efficient, 3-bedroom townhomes in Nephi’s Loveless Estates. Move-in ready homes near I-15.';
        break;
    case 'contact-us':
        $pageTitle = 'Contact Priority Homes';
        $metaTag = 'Contact Priority Homes about new construction townhouses in Nephi, UT';
        break;
    default:
        $pageTitle = 'Priority Homes';
        $metaTag = 'Nephi, UT | New construction townhomes';
        break;
}

// Optional: JSON loading
try {
    $homeInfo = getJsonData(DOC_ROOT . '/data_files/loveless_estates.json');
} catch (Throwable $e) {
    error_log($e->getMessage());
    $homeInfo = [];
}

// 4) Render

$landingContent = __DIR__ . '/landing_pages/' . $page . '.php';
$standardContent = __DIR__ . '/pages/' . $page . '.php';

if (is_readable($landingContent)) {
    require_once __DIR__ . '/template/landing-header.php';
    require $landingContent;
    require_once __DIR__ . '/template/landing-footer.php';
} else {
    require_once __DIR__ . '/template/header.php';
    require $standardContent;
    require_once __DIR__ . '/template/footer.php';
}