<?php

function pt ( string $value)
{
    echo "{$value} <br>";
}

$teste = 123;

pt($teste);
pt(321);
pt('sei la');

echo " <br>";

function sum (int $n1, int $n2):int
{
    return $n1 + $n2;
}

echo sum(4, 5) . "<br>";

function sumTwo (int $n1, int $n2, int $n3 = 5):int
{
    return ($n1 + $n2) * $n3;
}

echo sum(7, 5, 2) . "<br>";


