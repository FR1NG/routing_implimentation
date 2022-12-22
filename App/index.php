<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    require_once __DIR__.'/vendor/autoload.php';

    use App\Classes\Router;


    define("VIEWS_PATH", __DIR__."/src/views/");

    // echo VIEWS_PATH;
    Router::Get("/index/", [App\Controllers\TestController::class, 'index']);
    Router::Get("/create/", [App\Controllers\TestController::class, 'create']);
    Router::Patch("/edit/", [App\Controllers\TestController::class, 'create']);
    Router::Post("/store/", [App\Controllers\TestController::class, 'store']);
    Router::Delete("/delete/", [App\Controllers\TestController::class, 'delete']);

    Router::resolve($_SERVER["REQUEST_URI"]);

    