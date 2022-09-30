<?php

// lesson 2, task 1


placeToReturnTask1:

$answer = readline('В каком году произошло крещение Руси? Варианты: 810 год, 988 год или 740 год');

if((int)$answer === 810 || (int)$answer === 740) {
    echo 'Ответ не верный!';
} elseif ((int)$answer === 988) {
    echo 'Ответ верный!';
} else {
    goto placeToReturnTask1;
}


// lesson 2, task 2


$userName = readline('Введите Ваше имя.');
$numberOfTasks = (int)readline('Какое количество задач на сегодня у Вас запланировано?');
$arrayOfAnswers = []; //массив ответов задач и времени
$totalTasksTime = 0;


for ($i = 0; $i !== $numberOfTasks; $i++) {
    $userTask = readline('Какая задача № '.($i+1).' стоит перед Вами сегодня?');
    $userTaskTime = (int)readline('Сколько примерно времени эта задача займет?');
    $arrayOfAnswers[] = [$userTask, $userTaskTime];
}

echo ($userName.' у Вас запланировано '.$numberOfTasks.' задачи на сегодня:').PHP_EOL;

foreach ($arrayOfAnswers as $value) {
        $totalTasksTime += $value[1];
        echo ('- '.$value[0].', продолжительностью '.$value[1].' ч.').PHP_EOL;
}

echo ('Все задачи займут '.$totalTasksTime.' часов.').PHP_EOL;


// lesson 2, task 3


placeToReturnTask3:

$userInteger = (int)readline('Введите число которое надо поситать на пальцах.');
$fingerDirection = 0; //0 - направление счета вправо, 1 - направление счета влево
$numberOfFinger = 0; //порядковый номер пальца
$count = 0; //счетчик для сравнения ввода пользователя

if ($userInteger <= 0) goto placeToReturnTask3;

function answer_Finger($input) {
    switch ($input) {
        case 1:
            echo ('Счет закончится на большом пальце.');
            break;
        case 2:
            echo ('Счет закончится на указательном пальце.');
            break;
        case 3:
            echo ('Счет закончится на среднем пальце.');
            break;
        case 4:
            echo ('Счет закончится на безымянном пальце.');
            break;
        case 5:
            echo ('Счет закончится на мизинце.');
            break;
    }
}

for ($i=0; $i < $userInteger; $i++) {
    if ($count === $userInteger) {
      answer_Finger($numberOfFinger);
      break;
    }
    if ($count === 0) {
        $numberOfFinger++;
        $count++;
    }
    if ($numberOfFinger === 5 && $fingerDirection === 0) {
        $numberOfFinger = 4;
        $count++;
        $fingerDirection = 1;
    }
    if ($numberOfFinger === 1 && $fingerDirection === 1) {
        $numberOfFinger = 2;
        $count++;
        $fingerDirection = 0;
    }
    if ($fingerDirection === 0) {
        $numberOfFinger++;
        $count++;
    }
    if ($fingerDirection === 1) {
        $numberOfFinger--;
        $count++;
    }
}
