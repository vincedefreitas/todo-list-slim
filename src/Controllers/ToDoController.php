<?php

namespace App\Controllers;

use Slim\Views\PhpRenderer;

class ToDoController
{
    private $model;
    private $view;

    public function __construct(PhpRenderer $view)
    {

    }
}