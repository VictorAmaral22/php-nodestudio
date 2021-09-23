<?php
/**
 * Operadores de incremento e decremento
 * 
 * Servem para somar ou subtrair em (+1 ou -1) qualquer valor do tipo numérico ou string.
 */

$valorI = 20;
$valorII = 20;

/* Pré-incremento */
// incrementa o valor e mostra
echo ++$valorI; // 21
echo "<br>";

/* Pós-incremento */
// mostra o valor e incrementa
echo $valorII++; // 20
echo "<br>";
echo $valorII; // 21

echo "<hr>";

$valorIII = 20;
$valorIV = 20;

/* Pré-decremento */
// decrementa o valor e mostra
echo --$valorIII; // 19
echo "<br>";

/* Pós-decremento */
// mostra o valor e decrementa
echo $valorIV--; // 20
echo "<br>";
echo $valorIV; // 19