<?php
/**
 * Operadores Aritméticos
 * 
 * São usados com números para executar operações aritméticas comuns
 * 
 * Adição +
 * Subtração -
 * Multiplicação *
 * Divisão /
 * Módulo %
 * Exponencial **
 */

echo (10 + 10)."<br>"; // 20
echo (10 - 5)."<br>"; // 5
echo (10 * 5)."<br>"; // 50
echo (10 / 5)."<br>"; // 2
echo (10 % 5)."<br>"; // 0
echo (3 ** 5)."<br>"; // 243

$a = 2;
$b = 3;
$c = -5;

$bascara1 = ((-$b)**2 + sqrt(-4*$a*$c))/2*$a;
$bascara2 = ((-$b)**2 - sqrt(-4*$a*$c))/2*$a;

echo "<hr>";
echo $a.'x² + '.$b.'x '.$c.'<br>';
echo "x¹ = ".$bascara1."<br> x² = ".$bascara2;