<?php

$info = 'Minas Gerais/MG/Brasil/Terra';
$arrayInfo = explode('/',$info);

var_dump($arrayInfo[3]); // a posicao do array que voce vai coletar


echo '<hr>';

echo implode ($arrayInfo,); // ele vai incluir o caracter selecionado no meio da string