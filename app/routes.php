<?php
declare(strict_types=1);

use App\Controllers\CoursesAPIController;
use App\Controllers\ProductApiController;
use App\Controllers\ProductController;
use App\Controllers\RobotStoresController;
use App\Controllers\ToDoController;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', ToDoController::class);

};
