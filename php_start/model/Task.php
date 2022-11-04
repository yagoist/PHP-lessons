<?php

class Task
{
    private bool $isDone;

    function __construct(
        private int $id,
        private string $description,
    ){
        $this->isDone = false;
    }

    public function getId(): int
    {
        return $this->id;
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