<?php

use Blog\Post;
use Person\Person;
use Person\Name;

spl_autoload_register(
    function (string $class)
    {

        $file = str_replace('\\|_', DIRECTORY_SEPARATOR, $class).'.php'; // реализовано задание 1 и 2, как реализовать 3 не смог подобрать.

        if(file_exists($file))
        {
            require $file;
        }
    }
);

$test = new Post(
            new Person(
                new Name('Иван', 'Иванов'),
                new DateTimeImmutable()
            ),
            'Всем привет!'
);

echo $test.PHP_EOL;
