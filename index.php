<?php
declare(strict_types=1);

// 1) Bootstrap
require_once __DIR__ . '/protected/functions.php';
require_once __DIR__ . '/protected/configs.php';  // defines $page from REQUEST_URI

// 2) Whitelist your slugs
$allowedPages = ['home','contact-us', 'mail-form','404'];
if (!in_array($page, $allowedPages, true)) {
    http_response_code(404);
    $page = '404';
}

$requestPath = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($requestPath === '') {
    $requestPath = 'home';
}

switch ($requestPath) {
    case 'home':
        $pageTitle = 'Juab County Home Builders';
        $metaTag = '';
        break;
    case 'contact-us':
        $pageTitle = 'Contact Priority Homes';
        $metaTag = '';
    default:
        $pageTitle = 'Priority Homes';
        break;
}

try {        
    $homeInfo = getJsonData(
        DOC_ROOT . '/data_files/loveless_estates.json'
    );
} catch (Throwable $e) {
    error_log($e->getMessage());
    $homeInfo = []; // fallback
}    



// 3) Render
require_once __DIR__ . '/template/header.php';

$content = __DIR__ . '/pages/' . $page . '.php';
if (is_readable($content)) {
    require $content;
} else {
    $alt = __DIR__ . '/builders/' . $page . '.php';
    if (is_readable($alt)) {
        require $alt;
    } else {
        require __DIR__ . '/pages/404.php';
    }
}

require_once __DIR__ . '/template/footer.php';