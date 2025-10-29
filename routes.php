<?php

$controller = 'index';

if (isset($_SERVER['PATH_INFO'])) {

    $controller = str_replace('/', '', parse_url($_SERVER['PATH_INFO'])['path']);
}


if (! file_exists("../controllers/{$controller}.controller.php")) {

    abort(404);
}

require "../controllers/{$controller}.controller.php";
