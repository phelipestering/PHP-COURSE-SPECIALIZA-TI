<?php

// var_dump(is_dir('test.php')); // verificado se o arquivo test.php eh uma pasta
// var_dump(mkdir('uploads/test')); // cria a pasta uploads e testes

// removendo as pastas

// var_dump(rmdir('uploads/test/'));
// var_dump(rmdir('uploads/'));

// var_dump(getcwd()); // mostrando o local do arquivo

// var_dump(scandir('../formularios/'));

echo '<pre>' ;

var_dump(glob('../arrays/*php')); // gloob seleciona os arquivos que terminam com php

echo '<pre>' ;

var_dump(glob('../arrays/*php')); // gloob seleciona os arquivos que terminam com php, pode ser usada para filtrar extensoes



