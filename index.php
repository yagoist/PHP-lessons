<?php

declare(strict_types=1);

require 'User.php';
require 'Task.php';
require 'TaskService.php';
require 'Comment.php';

$user1 = new User('Dmitrii', 'Ivanov', 'male');

    $user1
        ->setAge(22)
        ->setEmail('divan@mail.ru')
        ->setIsActive(true);

$user2 = new User ('Ivan', 'Petrov', 'male');

$task1 = new Task($user1, new DateTime());

    $task1
        ->setDescription('Провести поросёнка по огороду и показать ему где хавать, а где какать...')
        ->markAsDone();

    TaskService::addComment($task1,  $user2, 'gthghtjtkrkmfcnv000000');

    var_dump($task1);
