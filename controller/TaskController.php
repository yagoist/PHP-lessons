<?php

require_once 'model/TaskProvider';

if (isset($_POST['action']) && $_POST['action'] === 'addTask'){
    if (isset($_POST['description']) && !empty($_POST['description'])) {
        $task = new TaskProvider();
        $task->setTaskList($_POST['description']);
    }
}

require_once 'view/task.php';