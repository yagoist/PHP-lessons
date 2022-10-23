<?php

class UserProvider
{

    private array $accounts = [
        'dmitrii' => 'qwerty'
    ];

    public function getByUserNameAndPassword(string $userName, string $password): ?User
    {
        $expectedPassword = $this->accounts[$userName] ?? null;
        if ($expectedPassword === $password) {
            return new User($userName);
        }

        return null;
    }
}