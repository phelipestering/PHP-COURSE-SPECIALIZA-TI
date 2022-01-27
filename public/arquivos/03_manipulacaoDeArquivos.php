<?php

$text = 'hoje e um lindo dia';

generateLog($text);

function generateLog($text)
{
$file = fopen('projetoXlog', 'a+');

fwrite($file, "$text \r\n");

fclose($file);
}
