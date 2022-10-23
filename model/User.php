<?php

class User
{
    function __construct(
        private string $userName,
    )
    {

    }

    public function getUserName(): string
    {
        return $this->userName;
    }

}