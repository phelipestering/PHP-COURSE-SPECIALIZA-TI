<?php

$file = fopen('projetoXlog.log', 'a+');
while (!feof($file)){ // enquanto nao percorre todo o arquivo selecionado
    echo fgets ($file, 4096) . '<br>'; // le a linha com o caractere maximo de 4096
}
fclose($file);