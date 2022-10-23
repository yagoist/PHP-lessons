<?php

class Task
{

    private bool $isDone = false;

    function __construct(
        private string $description,
    ){

    }

    public function setIsDone(): void
    {
        $this->isDone = true;
    }

    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

}