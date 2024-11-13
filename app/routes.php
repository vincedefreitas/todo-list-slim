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

    //demo code - two ways of linking urls to functionality, either via anon function or linking to a controller

    $app->get('/', function ($request, $response, $args) use ($container) {
        $renderer = $container->get(PhpRenderer::class);
        return $renderer->render($response, "index.php", $args);
    });

    $app->get('/sonic[/{id}]', function ($request, $response, $args) use ($container) {
        $queryParams = $request->getQueryParams();
        $parameters = [
            'id' => $args['id'],
            'catchphrase' => $queryParams['catchphrase']
        ];
        $renderer = $container->get(PhpRenderer::class);
        return $renderer->render($response, "sonic.php", $parameters);
    });

    $app->get('/robotstores', RobotStoresController::class);

    $app->get('/robotstores/product/{id}', ProductController::class);

    $app->get('/courses', CoursesAPIController::class);

    $app->get('/robotstores/api/product/{id}',ProductApiController::class);

};
