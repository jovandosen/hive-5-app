<?php

// Request URI
$uri = $_SERVER["REQUEST_URI"];

// Define routes
$routes = [
    '/' => 'home',
    '/php-info' => 'php-info',
    '/test' => 'test',
    '/curl-example' => 'curl-example',
    '/guzzle-example' => 'guzzle-example'
];

$routeFound = false;
$routeName = '';

foreach($routes as $key => $value) {
    if($uri == $key) {
        $routeFound = true;
        $routeName = $value;
        break;
    }
}

if($routeFound) {
    require_once __DIR__ . '/../pages/' . $routeName . '.php';
} else {
    header("HTTP/1.0 404 Not Found");
    echo 'Error 404: Page not found.';
    die();
}