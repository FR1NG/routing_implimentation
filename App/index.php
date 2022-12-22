<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    require_once __DIR__.'/vendor/autoload.php';

    use App\Classes\Router;

    // $test = new TestController();

    // $rt = new Router();
    // try {
    //     $rt->register("/index/", [App\Controllers\TestController::class, 'notfound'])
    //     ->register("/create/", [App\Controllers\TestController::class, 'create'])
    //     ->resolve($_SERVER["REQUEST_URI"]);
    // }
    // catch (\Exception $e)
    // {
    //     echo $e->getMessage();
    // }

    Router::Get("/index/", [App\Controllers\TestController::class, 'index']);
    Router::Get("/create/", [App\Controllers\TestController::class, 'create']);
    Router::Patch("/edit/", [App\Controllers\TestController::class, 'create']);
    Router::Post("/store/", [App\Controllers\TestController::class, 'store']);
    Router::Delete("/delete/", [App\Controllers\TestController::class, 'delete']);

    Router::resolve($_SERVER["REQUEST_URI"]);

    // print_r($_SERVER["REQUEST_METHOD"]);

    // print_r($_SERVER["REQUEST_URI"]);


    