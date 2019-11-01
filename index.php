<?php
$a = 4;
$b = 5;
echo '<br>';

echo '<br>';
var_dump($a === $b); // Сравнение по значению и типу
echo '<br>';
var_dump($a == $b);  // Сравнение по значению
echo '<br>';
var_dump($a > $b);    // Больше
echo '<br>';
var_dump($a < $b);    // Меньше
echo '<br>';
var_dump($a <> $b);  // Не равно
echo '<br>';
var_dump($a != $b);   // Не равно
echo '<br>';
var_dump($a !== $b); // Не равно без приведения типов
echo '<br>';
var_dump($a <= $b);  // Меньше или равно
echo '<br>';
var_dump($a >= $b);  // Больше или равно
?>