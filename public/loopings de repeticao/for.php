<?php


// contador ate 10
echo '<hr>';

for($i = 0; $i<=10; $i++){
    echo "{$i} <br>";
}

echo '<hr>';

// contador regressivo

echo '<hr>';

for($i = 10; $i>=0; $i--){
    echo "{$i} <br>";
}

echo '<hr>';

// utilizando o for para impressao de arrays

$inspetores = [
    'marcelo',
    'phelipe',
    'aluizio',
    'ze ferreira',
    'clodoaldo',
    'carlos'
];

for($i = 0; $i<count($inspetores); $i++){
    echo $inspetores [$i];
}

echo '<hr>';