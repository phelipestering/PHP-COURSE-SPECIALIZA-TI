<?php

$photo = $_FILES['image'];

$path = './imgs/';

// verificacao de tem o arquivo ou nao

if(move_uploaded_file($photo['tmp_name'],$path . $photo['name']))
    echo 'sucesso';
else
    echo 'Falha';

