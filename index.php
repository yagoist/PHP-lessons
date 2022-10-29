<?php

// lesson 1, task 1 - DONE


// lesson 1, task 2

$userName = readline('Введите Ваше имя.');
$userAge = readline('Введите Ваш возраст.');

echo('Вас зовут '.$userName.', вам '.$userAge.' лет.').PHP_EOL;

// lesson 1, task 3

$userTask1 = readline('Какая первая задача стоит перед Вами сегодня?');
$userTask1Time = (int) readline('Сколько примерно времени эта задача займет?');
$userTask2 = readline('Какая вторая задача стоит перед Вами сегодня?');
$userTask2Time = (int)readline('Сколько примерно времени эта задача займет?');
$userTask3 = readline('Какая третья задача стоит перед Вами сегодня?');
$userTask3Time = (int)readline('Сколько примерно времени эта задача займет?');

echo($userName.', сегодня у Вас запланировано 3 приоритетных задачи на день:'.PHP_EOL
    .'- '.$userTask1.' ('.$userTask1Time.'ч)'.PHP_EOL
    .'- '.$userTask2.' ('.$userTask2Time.'ч)'.PHP_EOL
    .'- '.$userTask3.' ('.$userTask3Time.'ч)'.PHP_EOL
    .'Примерное время выполнения плана = '.($userTask1Time + $userTask2Time + $userTask3Time).' ч.'

).PHP_EOL;
