<?php

$addNumber = [
    'number1' => 5,
    'number2' => 10
];

$result = $addNumber['number1'] + $addNumber['number2'];
$result = $addNumber['number1'] - $addNumber['number2'];
$result = $addNumber['number1'] * $addNumber['number2'];
$result = $addNumber['number1'] / $addNumber['number2'];

echo $addNumber['number1'] + $addNumber['number2'];
echo "<br>"; //séparation par une ligne 
echo $result;

?>