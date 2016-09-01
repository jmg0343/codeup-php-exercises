<?php

$a = 10;
$b = 5;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b;
}

// echo add(5, 4) . PHP_EOL;
// echo subtract(10, 5) . PHP_EOL;
// echo multiply(3, 5) . PHP_EOL;
// echo divide(9, 3) . PHP_EOL;
// echo modulus(6, 2) . PHP_EOL;

echo add($a, $b) . PHP_EOL;