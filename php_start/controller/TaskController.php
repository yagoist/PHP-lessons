<?php

require_once 'model/TaskProvider';

$pdo = new PDO(
    'sqlite:database.db',
    null,
    null,
    [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]
);

$taskProvider = new TaskProvider($pdo);

if (isset($_POST['action']) && $_POST['action'] === 'addTask'){
    if (isset($_POST['task']) && !empty($_POST['task'])) {
        $taskProvider->addTask($_POST['task']);
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $taskProvider->updeteNask($_GET['id']);
}

require_once 'view/task.php';