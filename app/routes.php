<?php
declare(strict_types=1);

use App\Controllers\AddTaskController;
use App\Controllers\CompletedController;
use App\Controllers\CoursesAPIController;
use App\Controllers\ProductApiController;
use App\Controllers\ProductController;
use App\Controllers\RobotStoresController;
use App\Controllers\ToDoController;
use App\Controllers\UpdateTaskController;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', ToDoController::class);

    $app->post('/', AddTaskController::class);

    $app->put('/', UpdateTaskController::class);

    $app->get('/completed', CompletedController::class);

};
