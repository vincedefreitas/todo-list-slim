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

    public function getTasks(): array
    {
        $query = $this->db->prepare('SELECT `id`, `description`, `completed` FROM `tasks`;');
        $query->execute();
        return $query->fetchALl();
    }

    public function addTask(array $data): void {
        $query = $this->db->prepare('INSERT INTO `tasks` (`description`, `completed`) VALUES (:description, :completed);');

        $query->execute([
            'description' => $data['description'],
            'completed' => 0
        ]);
    }

    public function updatedCompleted($data): void {
        $query = $this->db->prepare('UPDATE `tasks` SET `completed` = 1 WHERE `id` = :id;');
        $query->execute([
            'id' => $data['id']
        ]);
    }

    public function deleteTask($data): void {
        $query = $this->db->prepare('DELETE FROM `tasks` WHERE `id` = :id;');
        $query->execute([
            'id' => $data['id']
        ]);
    }
}