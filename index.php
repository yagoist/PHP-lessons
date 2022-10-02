<?php

//// lesson 4, task 1


$arrayOne = [5, 7, 8, 15, 5, 2, 3, 34, 9, 10, 78, 95, 43];

$foo = function ($item) :string
{
    return $item % 2 === 0 ? 'четное' : 'нечетное';
};

var_dump(array_map($foo, $arrayOne));


//// lesson 4, task 2


$arrayOfInteger = [51, 3, 43, 8, 19, 54, 10, 48, 99, 103, 61];

function findMaxMinAvgInt (array $arr) :array
{
    $minInteger = $arr[0];
    $maxInteger = $arr[0];
    $sumInteger = 0;
    foreach ($arr as $item) {
        if ($item < $minInteger) $minInteger = $item;
        if ($item > $maxInteger) $maxInteger = $item;
        $sumInteger += $item;
    }
    return [$maxInteger, $minInteger, ($sumInteger / count($arr))];
};

var_dump(findMaxMinAvgInt($arrayOfInteger));


//// lesson 4, task 3


$box = [
  [
      0 => 'Тетрадь',
      1 => 'Книга',
      2 => 'Настольная игра',
      3 => [
          'Настольная игра',
          'Настольная игра'
      ],
      4 => [
          [
              'Ноутбук',
              'Зарядное устройство'
          ],
          [
              'Компьютерная мышь',
              'Набор проводов',
              [
                  'Фотография',
                  'Картина'
              ]
          ],
          [
              'Иструкция',
              [
                  'Ключ'
              ]
          ]
      ]
  ],
  [
      0 => 'Пакет кошачего корма',
      1 => [
          'Музыкальный плеер',
          'Книга'
      ]
  ]
];

$answer = false;

function searchItem (string $itemName, array $arrayOfItems): bool
{
    global $answer;
    foreach ($arrayOfItems as $item) {
        if ($itemName === $item) $answer = true;
        if (gettype($item) ===  'array') searchItem($itemName, $item);
  }
  return $answer;
}

var_dump(searchItem('Ключ', $box));