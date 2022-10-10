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
  $avg = $avg / sizeof($arr);
  $avg = intval($avg);
  return array(min($arr), max($arr), $avg);
}
$res2 = myFunc($arr);
var_dump($res2);


//Разработайте класс Task, выполняющий ответственность обычной задачи
// Todo-списка. Класс должен содержать приватные свойства description,
// dateCreated, dateUpdated, dateDone, priority (int), isDone (bool) и обязательное user (User). В качества класса пользователя воспользуйтесь разработанным на уроке. Класс Task должен содержать все необходимые для взаимодействия со свойствами методы (getters, setters). При вызове метода setDescription обновляйте значение свойства dateUpdated. Разработайте метод markAsDone, помечающий задачу выполненной, а также обновляющий свойства dateUpdated и dateDone.

//Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author (User), task (Task) и text (string). TaskService должен реализовывать статичный метод addComment(User, Task, text), добавляющий к задаче комментарий пользователя. Отношение между классами задачи и комментария должны быть построены по типу ассоциация, поэтому необходимо добавить соответствующее свойство и методы классу Task.

//Разработайте механизм корзины интернет-магазина. Реализуйте класс продукта (Product) со свойствами title (string), price (float) и components (массив объектов Product), и соответствующие методы для взаимодействия со свойствами. Свойство components служит для реализации товара-наборов (например, комплект клавиатура+мышь) и в случае, если экземпляр содержит компоненты, стоимость этого комплекта должна быть равна сумме стоимостей её компонентов. Разработайте класс корзины (Cart) с методами для добавления, удаления товаров, а также с методом вычисления полной стоимости корзины, с учётом того, что некоторые товары могут представлять из себя комплекты других товаров.