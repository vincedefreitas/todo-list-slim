<?php

namespace App\Controllers;

use App\Models\ToDoModel;

class DeleteTaskController
{
    private $model;

    public function __construct(ToDoModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $this->model->deleteTask($args);
        return $response->withHeader('Location', '/completed')->withStatus(301);
    }
}