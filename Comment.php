<?php

class Comment
{

    private array $comment;

    function __construct
    (
        private string $text,
        private User $author,
        private Task $task
    )
    {

    }

    public function getComment(): array
    {
        return $this->comment;
    }

    public function setComment(array $comment): void
    {
        $firstNameUser = $this->author->getFirstName();
        $secondNameUser = $this->author->getSecondName();
        //допилить добавление автора и текста
        $this->comment = $comment;
    }

}