<?php

namespace Php_pro\Person;

class Name
{
    function __construct (
        private string $firstName,
        private string $lastName
    )
    {

    }
    public function  __toString(): string
    {
     return  $this->firstName.' '.$this->lastName;
    }
}