<?php

require_once 'User.php';

class UserProvider
{
    function __construct(PDO $pdo)
    {

    }

    public function registerUser(User $user, string $hashPassword):?User
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO users(name, username, password)
            VALUES(:name, :userName, :password)'
        );

        $statement->execute(
            [
                'name' => $user->getName(),
                'userName' => $user->getUserName(),
                'password' => md5($hashPassword)
            ]
        );
        return $this->getByUserNameAndPassword($user->getUserName(), $user->getName(), $hashPassword);
    }

    public function getByUserNameAndPassword(string $userName, string $name, string $password): ?User
    {
        $statement = $this->pdo->prepare(
          'SELECT name, userName
           FROM users
           WHERE userName = :userName AND password = :password
           LIMIT 1'
        );

        $statement->execute(
            [
                'userName' => $userName,
                'password' => md5($password)
            ]
        );

        return $statement->fetchObject(User::class, [$userName, $name])?: null;
    }
}