<?php


class TaskService
{

    public static function addComment(Task $task, User $user, string $text): void
    {
        $comment = new Comment($task, $user, $text);
        $task->setComment($comment);

    }

}
