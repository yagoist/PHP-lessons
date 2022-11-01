<?php

require_once 'model/Task.php';

class TaskProvider
{
    function __construct(PDO $pdo){

    }

    public function getUndoneList():? array
    {
        $sql = 'SELECT id, description, isDone
                FROM tasks
                WHERE isDone = false';
        $statement = $this->pdo-prepare($sql);
        $arrayOfTasks = [];
        while ($task = $statement->fetch()) {
            $arrayOfTasks[] = new Task($task['id'], $task['description'], (bool)$task['isDone']);
        }
        return $arrayOfTasks?:null;
    }

    public function addTask(string $text): void
    {
        try {
                $statement = $this->pdo->prepare('INSERT INTO tasks (description) values(:desc)');
                if(!$statement) {
                    echo 'ошибка подготовки';
                }
                if(!$statement->execute([$text])) {
                    echo 'ошибка экзак';
                }
            } catch (Exception $err)
            {
                var_dump($err);
            }
    }

    public function updateTaskList(int $id): self
    {
        $sgl = 'UPDATE tasks
                SET isDone = true
                WHERE id = :id';

        $statement = $this->pdo->prepare($sgl);
        $statement->execute(['id' => $id]);

        return $this;
    }
}