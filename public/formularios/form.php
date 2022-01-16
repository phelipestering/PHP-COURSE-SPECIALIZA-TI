<?php

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