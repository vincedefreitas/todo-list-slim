<?php

namespace App\Controllers;

use App\Models\ToDoModel;

class UpdateTaskController
{
    private $model;

    public function __construct(ToDoModel $model)
    {
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $this->model->updatedCompleted($args);
        return $response->withHeader('Location', '/')->withStatus(301);
    }

}