<?php

/**
 * funcao end
 */

$inspetores = [

    0,1,2,3,4,5,6,7,

    ];

/**
 * funcao end retorna o ultimo numero
 */

 echo '<pre>';

var_dump($inspetores);

echo end ($inspetores);

echo '<hr>';


/**
 * array filter retornar  os valores filtrados por uma funcao callback
 */

echo '<pre>';

$inspetoresFiltered = array_filter($inspetores, function ($inspetores){
    return $inspetores >= 2;
});

var_dump($inspetoresFiltered);


echo '<hr>';

/**
 * array filter retornar  os valores filtrados por uma funcao callback
 */

echo '<pre>';

$inspetoresFiltered = array_filter($inspetores, function ($inspetores){
    return $inspetores >= 2;
});

var_dump($inspetoresFiltered);


echo '<hr>';


