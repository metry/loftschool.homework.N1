<?php

//Задание #1
echo '<hr>';
$name = 'Дмитрий';
$age = '27';

echo 'Меня зовут: ' . $name . '<br>';
echo 'Мне ' . $age . ' лет' . '<br>';
echo '"!|\/\'"\\';

//Задание #2
echo '<hr>';
const COUNT_IMAGES = 80;
const COUNT_MARKER = 23;
const COUNT_PENCIL = 40;
const COUNT_PAINT = COUNT_IMAGES - COUNT_MARKER - COUNT_PENCIL;

echo 'Рисунков всего: ' . COUNT_IMAGES . '<br>';
echo 'Рисунков фломастерами: ' . COUNT_MARKER . '<br>';
echo 'Рисунков карандашами: ' . COUNT_PENCIL . '<br>';
echo 'Рисунков красками: ' . COUNT_IMAGES . ' - ' . COUNT_MARKER . ' - ' . COUNT_PENCIL . ' = ' . COUNT_PAINT;

//Задание #3
echo '<hr>';
$age = 0;
if ($age >= 1 && $age <= 17) {
    echo 'Вам ещё рано работать';
} elseif ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} else {
    echo 'Неизвестный возраст';
}

//Задание #4
echo '<hr>';
$day = 0;
switch ($day) {
    case 1:
        echo 'Это рабочий день';
        break;
    case 2:
        echo 'Это рабочий день';
        break;
    case 3:
        echo 'Это рабочий день';
        break;
    case 4:
        echo 'Это рабочий день';
        break;
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
        echo 'Это выходной день';
        break;
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
        break;
}

//Задание #5
echo '<hr>';
$bmw = array(
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
);
$toyota = array(
    'model' => 'Camry',
    'speed' => 100,
    'doors' => 5,
    'year' => '2011'
);
$opel = array(
    'model' => 'Astra',
    'speed' => 80,
    'doors' => 5,
    'year' => '2008'
);
$cars = [ 'bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel ];

foreach ($cars as $carName => $carProperties) {
    //inline css стили сделаны только для примера.
    echo '<div style="border:1px solid black;margin: 2px;">';
    echo 'CAR ' . $carName . '<br>';
    foreach ($carProperties as $carProperty) {
        if ($carProperty == end($carProperties)) {
            echo $carProperty;
        } else {
            echo $carProperty . ' ';
        }
    }
    echo '</div>';
}

//Задание #6
echo '<hr>';
echo '<table border="1">';
for ($i=1; $i<=10; $i++) {
    echo '<tr>';
    for ($j=1; $j<=10; $j++) {
        echo '<td style="padding:20px;">';
        if ($i%2 == 0 && $j%2 == 0) {
            echo '(' . $i*$j . ')';
        } elseif ($i%2 == 1 && $j%2 == 1) {
            echo '[' . $i*$j . ']';
        } else {
            echo $i*$j;
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
