<?php


// demonstracao da funcao file_put_contents que faz com que seja inserido contaudo no arquivo

$content = 'dando certo o input';

$file = 'renameTest.txt'; // armazenando o arquivo para a variavel

if(file_exists($file)){
    //file_put_contents('renameTest.txt', $content); // inserindo o conteudo

    var_dump(file_get_contents($file)); // lendo o conteudo do arquivo

}else {
    echo 'Arquivo nao encontrado';
}