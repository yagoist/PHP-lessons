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

$task1 = new Task($user1);

    $task1->setDescription('Провести поросёнка по огороду и показать ему где хавать, а где какать...');
    $task1->markAsDone();

$comment = new Comment('First', $user1, $task1);

    var_dump($comment);
