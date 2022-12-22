<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    require(__DIR__.'/vendor/autoload.php');

    use App\Controllers\TestController;
    use App\Classes\Router;

    // $test = new TestController();

    $rt = new Router();

    $rt->register("/index/", [App\Controllers\TestController::class, 'index'])
    ->register("/create/", [App\Controllers\TestController::class, 'create'])
    ->resolve($_SERVER["REQUEST_URI"]);

    // print_r($_SERVER["REQUEST_URI"]);

