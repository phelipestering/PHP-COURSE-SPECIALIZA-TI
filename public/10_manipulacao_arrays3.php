<?php

/**
 * ordenacao de arrays
 */

$inspetores = [

    0 => 'clodoaldo', 
    2 => 'daniel', 
    3 => 'carlos', 
    4 => 'eliezer',
    5 => 'marcelo',

    ];

/**
 * orenando em ordem albetica decrescente
 */

 echo '<pre>';

arsort($inspetores);

var_dump($inspetores);

echo '<hr>';

/**
 * orenando em ordem albetica crescente
 */

echo '<pre>';

asort($inspetores);

var_dump($inspetores);

echo '<hr>';

/**
 * array map percorre o array e formata com funcoes
 */


$inspetoresName = [

    0 => 'clodoaldo', 
    2 => 'daniel', 
    3 => 'carlos', 
    4 => 'eliezer',
    5 => 'marcelo',

    ];

echo '<pre>';

$inspetoresName = array_map('applyToupper', $inspetoresName);

//funcao para colocar as letras em MAIUSCULA

function applyToupper ($value){
    return strtoupper($value);
}

var_dump($inspetoresName);

echo '<hr>';