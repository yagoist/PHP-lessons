<?php

class Task
{
    private string $description;
    private DateTimeInterface $dateCreated;
    private DateTimeInterface $dateUpdate;
    private DateTimeInterface $dateDone;
    private int $priority;
    private bool $isDone = false;
    private Comment $comment;

        public function getComment(): string
    {
        return $this->comment ;
    }


    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    function __construct (private object $user)
    {
        $this->setDateCreated(new DateTime());
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function setDescription(string $description): self
    {
        $this->setDateUpdate(new DateTime());
        $this->description = $description;
        return $this;
    }


    public function getDateCreated(): DateTimeInterface
    {
        return $this->dateCreated;
    }


    public function setDateCreated(DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }


    public function getDateUpdate(): DateTimeInterface
    {
        return $this->dateUpdate;
    }


    public function setDateUpdate(DateTimeInterface $dateUpdate): self
    {
        $this->dateUpdate = $dateUpdate;
        return $this;
    }


    public function getDateDone(): DateTimeInterface
    {
        return $this->dateDone;
    }


    public function setDateDone(DateTimeInterface $dateDone): self
    {
        $this->dateDone = $dateDone;
        return $this;
    }


    public function getPriority(): int
    {
        return $this->priority;
    }


    public function setPriority(int $priority): self
    {
        $this->priority = $priority;
        return $this;
    }


    public function getIsDone(): bool
    {
        return $this->isDone;
    }


    public function setIsDone(bool $isDone): self
    {
        $this->isDone = $isDone;
        return $this;
    }


    public function getUser(): object
    {
        return $this->user;
    }

    public function markAsDone(): void
    {
        $this->setDateUpdate(new DateTime());
        $this->setDateDone(new DateTime());
        $this->setIsDone(true);
    }

}