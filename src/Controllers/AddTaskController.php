<?php

namespace App\Controllers;

use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class addTaskController
{
    private $model;
    private $view;

    public function __construct(ToDoModel $model, PhpRenderer $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function __invoke($request, $response, $args)
    {

        $data = $request->getParsedBody();
        $this->model->addTask($data);
        $tasks = $this->model->getTasks();
        $params = ['tasks' => $tasks];
        return $this->view->render($response, "index.php", $params);
    }
}