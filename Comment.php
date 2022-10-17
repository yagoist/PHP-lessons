<?php

class Comment
{
    private string $text;
    private string $author;
    private Task $task;

    function __construct(Task $taskt, User $usert, string $textt)
    {
        $firstNameUser = $usert->getFirstName();
        $secondNameUser = $usert->getSecondName();
        $authorFullName = "${firstNameUser} ${secondNameUser}";
        $this->author = $authorFullName;
        $this->text = $textt;
        $this->task = $taskt;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

}