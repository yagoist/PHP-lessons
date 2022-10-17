<?php

class User
{
    private string $email;
    private int $age;
    private bool $isActive;
    private DateTime $dateCreated;

    function __construct (
        private string $firstName,
        private string $secondName,
        private string $sex,

    )
    {
        $this -> dateCreated = new DateTime();
    }


    public function getFirstName(): string
    {
        return $this->firstName;
    }


    public function getSecondName(): string
    {
        return $this->secondName;
    }


    public function getSex(): string
    {
        return $this->sex;
    }


    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }


    public function getAge(): int
    {
        return $this->age;
    }


    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }


    public function isActive(): bool
    {
        return $this->isActive;
    }


    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }


    public function getDateCreate(): DateTimeInterface
    {
        return $this -> $dateCreated;
    }


    public function setDateCreate(DateTime $dateCreated): self
    {
        $this -> $dateCreated = new DateTime();
        return $this;
    }


}