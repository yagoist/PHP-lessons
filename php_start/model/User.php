<?php

class User
{
    private string $name;

    function __construct(
        private int $id,
        private string $userName
    )
    {

    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getId (): int
    {
        return $this->id;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

}