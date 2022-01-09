<?php

/* array pop e shift

// array_pop($materiais);

retira o ultimo elemento do array
*/

$materiais = ['valvula', 'tubos', 'motor', 'estrutura'];

/**
 * antes do array pop
 * 
 * array(4) { [0]=> string(7) "valvula" [1]=> string(5) "tubos" [2]=> string(5) "motor" [3]=> string(9) "estrutura" }

    depois do array pop

    array(3) { [0]=> string(7) "valvula" [1]=> string(5) "tubos" [2]=> string(5) "motor" }

 array shift remove o primeiro registro

depois do array shift

array(3) { [0]=> string(5) "tubos" [1]=> string(5) "motor" [2]=> string(9) "estrutura" }

*/


// array_pop($materiais);

//array_shift($materiais);


/**
 * removendo itens do array com UNSET
 */

//unset ($materiais[1]); // retirando o item motor

/**
 * array(3) { [0]=> string(7) "valvula" [2]=> string(5) "motor" [3]=> string(9) "estrutura" }
 */


/**
 * adccionamento elemento ao final do array com push
 */

array_push($materiais,'painel eletrico');
var_dump($materiais);
echo '<hr>';

/**
 * adccionamento elemento ao inicio do array com unshift
 */

array_unshift($materiais,'clp');
array_unshift($materiais,'motor');
var_dump($materiais);
echo '<hr>';

/**
 * para remover elementos duplicados use o array unique
 */

$materiais = array_unique($materiais);
var_dump($materiais);
echo '<hr>';