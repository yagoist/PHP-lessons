<?php

// lesson 3, task 1


$arrayOne = [5, 7, 8, 15, 5, 2, 3, 34, 9, 10];
$arrayTwo = [3, 4, 6, 9, 1, 14, 21, 6, 8, 15];
$arrayResult = [];

for ($i = 0; $i < count($arrayOne); $i++) {
        $arrayResult[] = $arrayOne[$i] * $arrayTwo[$i];
}
print_r($arrayResult);


//// lesson 3, task 2


$userName = readline('Введите имя именинника.');
$congratulationsPartOne = ['богатырского здоровья', 'надежных друзей', 'чаще улыбаться', 'держаться огурцом', 'не быть помидором', 'не двинуть кони'];
$congratulationsPartTwo = ['с работы не выгнали', 'денег побольше', 'богатств несметных', 'жена любила', 'ноги носили', 'руки таскали'];

$randomCongratulation = [
    0 => $congratulationsPartOne[array_rand($congratulationsPartOne)],
    1 => $congratulationsPartTwo[array_rand($congratulationsPartTwo)]
];

echo('Дорогой '.$userName.', от всего сердца поздравляю тебя с днем рождения, желаю '.(implode(', и чтобы ', $randomCongratulation).'!!!'));


//// lesson 3, task 3

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Сопляков Виктор' => 4,
        'Кишкин Никита' => 3,
        'Воротников Николай' => 3,
        'Сепультура Ольга' => 5,
        'Заборов Александр' => 2,
        'Жигули Виталий' => 3,
        'Лошадиный Сергей' => 3,
        'Красный Александр' => 5,
    ],
    'БАП20' => [
        'Никитин Никита' => 4,
        'Дмитриев Дмитрий' => 4,
        'Конюшкин Виктор' => 4,
        'Закидышев Никита' => 1,
        'Пузатов Николай' => 4,
        'Слипнотова Ольга' => 2,
        'Парадный Александр' => 5,
        'Москвич Виталий' => 3,
        'Зайцев Сергей' => 5,
        'Синий Александр' => 2,
    ]
];

$averageGradeTotal = 0;
$nameOfBestGroup = '';
$studentsForOut = $students;

foreach ($students as $indexGroup => $group) {
        $averageGrade = 0;
        $sumGrade = 0;
    foreach ($group as $student => $grade) {
            $sumGrade += $grade;
            if ($grade > 2) {
                unset($studentsForOut[$indexGroup][$student]);
            }
        }
    $averageGrade = $sumGrade / count($group);
     if ($averageGrade > $averageGradeTotal) {
         $averageGradeTotal=$averageGrade;
         $nameOfBestGroup = $indexGroup;
     }

}
echo ("Наибольшая средняя оценка составляет: $averageGradeTotal в группе: $nameOfBestGroup").PHP_EOL;
print_r($studentsForOut); //вывод на отчисление

