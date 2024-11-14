<?php

namespace App\Controllers;

use App\Models\ToDoModel;

class addTaskController
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
        return $response->withJson(["message" => "Success!"], 201);
    }
}