<?php
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
// Урок 4. Задание №1 Подготовьте массив целых чисел (4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2). Разработайте анонимную функцию для применения в качестве аргумента array_map, возвращающую для каждого элемента массива строковое значение: «четное» или «нечетное». Для проверки четности числа используйте деление по модулю (%);
$isEvenOrOdd = function (int $num){
  return $num % 2 ? "Нечетное" : "Четное";
};
$res = array_map($isEvenOrOdd, $arr);
var_dump($res);

// Урок 4. Задание №2 Разработайте функцию с объявленными типами аргументов и возвращаемого значения, принимающую в качестве аргумента массив целых чисел. Результатом работы функции должен быть массив, содержащий три элемента: max — наибольшее число, min — наименьшее число, avg — среднее арифметическое всех чисел массива;
function myFunc (array $arr): array {
  $avg = 0;
  for($i=1; $i < sizeof($arr); $i++){
    $avg += $arr[$i];
  }
  return array(min($arr), max($arr), $avg);
}

$res2 = myFunc($arr);
var_dump($res2);
echo PHP_EOL;