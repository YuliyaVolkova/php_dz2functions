<?php
require_once('src/functions.php');

ob_start();

/**
 * Task 1
 */

echo "<div class='task-wrapper'>";
echo '<h2>Задание 1</h2>';

// Вариант 1

$data = [
    'Параметры можно объявлять как необязательные.',
    'Если функции get_sum() не передаются параметры по умолчанию. ',
    ' В примере ниже приводится некорректное объявление функции get_sum().'
];

task1($data);
echo '<hr>';

// Вариант 2

$data = [
    'Параметры',
    'можно',
    'объявлять',
    'как',
    'необязательные.'
];
echo '<p>', task1($data, true), '</p>';

echo '</div>';

/**
 * Task 2
 */

echo "<div class='task-wrapper'>";
echo '<h2>Задание 2</h2>';

echo '<p>', task2('+', 8, 9, 90.5, 29, 7), '</p>';
echo '<p>', task2('-', 8, 9, 90.5, 29), '</p>';
echo '<p>', task2('*', 8, 9, 90.5, 29), '</p>';
echo '<p>', task2('/', 15, 5, 1, 3), '</p>';
echo '<p>', task2('%', 8, 9, 90.5), '</p>';
echo '<p>', task2('**', 8, 2, 2, 3), '</p>';

echo '</div>';

/**
 * Task 3
 */

echo "<div class='task-wrapper'>";
echo '<h2>Задание 3</h2>';

 task3(12,12);
 task3(5,5);

echo '</div>';

/**
 * Task 4
 */

echo "<div class='task-wrapper'>";
echo '<h2>Задание 4</h2>';

$timestamp = '24.02.2016 00:00:00';

task4($timestamp);
echo '<hr>';

task4('26.02.2018 13:56:00');
echo '</div>';

/**
 * Task 5
 */

echo "<div class='task-wrapper'>";
echo '<h2>Задание 5</h2>';

// Вариант удаления 'К'

$str = 'Карл у Клары украл Кораллы';

echo '<p>', task5($str, 'К'), '</p>';
echo '<hr>';


// Вариант замены 'Две' на 'Три'

$str = 'Две бутылки лимонада';

echo '<p>', task5($str, 'Две', 'Три'), '</p>';
echo '<hr>';

// Вводить можно любые строки

$str = 'Исходная строка передается первым аргументом, строка поиска - вторым, строка замены - третим.';

echo '<p>', task5($str, '.', ', если третий параметр не задан, функция выполнит удаление, иначе замену.'), '</p>';
echo '</div>';

/**
 * Task 6
 */

echo "<div class='task-wrapper'>";
echo '<h2>Задание 6</h2>';

$file = 'test.txt';

task6($file);
echo '</div>';

$content = ob_get_contents();
ob_end_clean();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./src/css/styles.css">
    <title>Второе домашнее задание от loftschool.com</title>
</head>
<body>
<div class="container">
    <h1 class="title">Второе домашнее задание</h1>
    <?= $content ?>
</div>
</body>
</html>
