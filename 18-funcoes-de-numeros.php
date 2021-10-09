<?php
/**Funções para Números 
 * number_format
 * round
 * ceil
 * floor
 * rand
*/

$db = 1252.59;
$preco = number_format($db, 2, ',', '.');
echo "O preço é : R$ $preco"; // 1.252,59

echo "<hr>";

echo round(6.5); // 7
echo round(6.4); // 6

echo "<hr>";

echo ceil(6.001); // 7
echo ceil(6.9); // 7

echo "<hr>";

echo floor(6.001); // 6
echo floor(6.99); // 6

echo "<hr>";

echo rand(1, 999999999); // gera números aleatórios de 1 a 999.999.999