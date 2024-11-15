<?php

namespace App\Controllers;

use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class AddTaskController
{
    private $model;

    public function __construct(ToDoModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $data = $request->getParsedBody();
        $this->model->addTask($data);
        return $response->withHeader('Location', '/')->withStatus(301);
    }
}