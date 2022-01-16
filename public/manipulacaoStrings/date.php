<?php

date_default_timezone_set('America/Sao_Paulo');
echo 'O ano atual e '.date ('Y') . '<br>'; // passa o ano atual minusculo data abreviada, maiusculo data completa
echo 'O mes atual e '.date ('m') . '<br>';
echo 'A data atual e '.date ('d/m/y') . '<br>';
echo 'A hora atual e '.date ('h:i:s') . '<br>'; // h minusculo para 12 horas e H maiusculo para 24 horas
echo 'Time Zone: ' . date_default_timezone_get(); // imprime qual timezone esta sendo trabalhado


// documentacao - https://www.php.net/manual/pt_BR/function.date