<?php

// O REQUEST SERVE PARA PEGAR OS DADOS DE REQUISICOES DE TODOS OS TIPOS

// SEJA POST, GET OU ANY

if ($_REQUEST['nome'] == '' || strlen($_REQUEST['nome']) <= 3 ){
    
    echo 'o campo e invalido';

    return;

    } 

// RECUPERANDO PELO METODO POST

echo "Nome: {$_POST['nome']}";
echo '<hr>';
echo "Senha: {$_POST['senha']}";
echo '<hr>';
echo "Email: {$_POST['email']}";
echo '<hr>';
echo "Concorda com os termos".isset($_POST['concordo']) &&  $_POST['concordo'] != '' ? 'CONCORDA COM OS TERMOS' : ' TERMO NAO ACEITADO';
echo '<hr>';
echo "Sexo : {$_POST['sexo']}";
echo '<hr>';
echo "Estado: {$_POST['estado']}";
echo '<hr>';
echo "Descricao: {$_POST['descricao']}";
echo '<hr>';