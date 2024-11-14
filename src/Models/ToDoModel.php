<?php

namespace App\Models;

use PDO;

class ToDoModel
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks()
    {
        $query = $this->db->prepare('SELECT `id`, `description`, `completed` FROM `tasks`;');
        $query->execute();
        return $query->fetchALl();
    }

    public function addTask($data): void {
        $query = $this->db->prepare('INSERT INTO `tasks` (`description`, `completed`) VALUES (:description, :completed);'
        );

        $query->execute([
            'description' => $data['description'],
            'completed' => 0
        ]);
    }

}