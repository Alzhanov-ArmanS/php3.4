<?php

// Задание 1: Определение простой функции и возвращаемые значения
function multiply($a, $b) {
    return $a * $b;
}
echo multiply(3, 4) . "\n"; // Ожидаемый результат: 12

// Задание 2: Область видимости переменных
$globalVar = 50;
function sumGlobal() {
    global $globalVar;
    $localVar = 100;
    return $globalVar + $localVar;
}
echo sumGlobal() . "\n"; // Ожидаемый результат: 150

// Задание 3: Рекурсия
function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
echo factorial(5) . "\n"; // Ожидаемый результат: 120

// Задание 4: Анонимные функции
$array = ["apple", "banana", "cherry"];
$result = array_map(function($item) {
    return strtoupper($item);
}, $array);
print_r($result); // Ожидаемый результат: ["APPLE", "BANANA", "CHERRY"]

// Задание 5: Стрелочные функции
$sum = fn($a, $b) => $a + $b;
echo $sum(3, 4) . "\n"; // Ожидаемый результат: 7

// Задание 6: Замыкания / Closure
function counter() {
    $count = 0;
    return function() use (&$count) {
        $count++;
        return $count;
    };
}
$myCounter = counter();
echo $myCounter() . "\n"; // Ожидаемый результат: 1
echo $myCounter() . "\n"; // Ожидаемый результат: 2

// Задание 7: Генераторы и оператор yield
function generateNumbers() {
    for ($i = 1; $i <= 5; $i++) {
        yield $i;
    }
}
$generator = generateNumbers();
foreach ($generator as $number) {
    echo $number . " "; // Ожидаемый результат: 1 2 3 4 5
}
echo "\n";

// Задание 8: Использование встроенных функций
$array = [3, 7, 2, 8, 4, 10, 1];
$minValue = min($array);
$maxValue = max($array);
echo "Минимум: " . $minValue . "\n"; // Ожидаемый результат: Минимум: 1
echo "Максимум: " . $maxValue . "\n"; // Ожидаемый результат: Максимум: 10

?>
