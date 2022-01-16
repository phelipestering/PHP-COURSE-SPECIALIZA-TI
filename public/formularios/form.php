<?php

// O REQUEST SERVE PARA PEGAR OS DADOS DE REQUISICOES DE TODOS OS TIPOS

// SEJA POST, GET OU ANY



echo "Nome: {$_REQUEST['nome']}";
echo '<hr>';
echo "Senha: {$_REQUEST['senha']}";
echo '<hr>';
echo "Email: {$_REQUEST['email']}";
echo '<hr>';
echo "Concorda com os termos".isset($_REQUEST['concordo']) &&  $_REQUEST['concordo'] != '' ? 'CONCORDA COM OS TERMOS' : ' TERMO NAO ACEITADO';
echo '<hr>';
echo "Sexo : {$_REQUEST['sexo']}";
echo '<hr>';
echo "Estado: {$_REQUEST['estado']}";
echo '<hr>';
echo "Descricao: {$_REQUEST['descricao']}";
echo '<hr>';


// RECUPERANDO PELO METODO POST

// echo "Nome: {$_POST['nome']}";
// echo '<hr>';
// echo "Senha: {$_POST['senha']}";
// echo '<hr>';
// echo "Email: {$_POST['email']}";
// echo '<hr>';
// echo "Concorda com os termos".isset($_POST['concordo']) &&  $_POST['concordo'] != '' ? 'CONCORDA COM OS TERMOS' : ' TERMO NAO ACEITADO';
// echo '<hr>';
// echo "Sexo : {$_POST['sexo']}";
// echo '<hr>';
// echo "Estado: {$_POST['estado']}";
// echo '<hr>';
// echo "Descricao: {$_POST['descricao']}";
// echo '<hr>';