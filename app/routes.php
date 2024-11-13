<?php
declare(strict_types=1);

use App\Controllers\CoursesAPIController;
use App\Controllers\ProductApiController;
use App\Controllers\ProductController;
use App\Controllers\RobotStoresController;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', function ($request, $response, $args) use ($container) {
        $renderer = $container->get(PhpRenderer::class);
        return $renderer->render($response, "index.php", $args);
    });

};
