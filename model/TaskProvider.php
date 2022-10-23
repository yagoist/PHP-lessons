<?php

require_once 'model/Task.php';

class TaskProvider
{
    private array $taskList;

    public function addTask(string $description, Task $task): void
    {
        $_SESSION['taskList'][] = [
            'description'=> $description,
            'isDone' => $task -> getIsDone()
        ];
    }

    public function getTaskList(): array
    {
        return $this->taskList;
    }

    public function setTaskList():? array
    {
        foreach ($_SESSION['taskList'] as $item) {
            if(!$item['isDone']) {
                $this ->taskList[] = new Task($item['description']);
            }
        }
        return $this->taskList ?? null;
    }

}