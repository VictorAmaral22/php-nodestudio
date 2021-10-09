<?php
/** Funções para Strings
 * strtoupper
 * strtolower
 * substr
 * str_pad
 * str_repeat
 * strlen
 * str_replace
 * strpos
 */

$nome = "Vitão";
echo strtoupper($nome); // VITãO

echo "<hr>";

$string = "Hello World";
echo substr($string, 2); // llo World
echo substr($string, 2, 3); // llo

echo "<hr>";

$batata = 'Ovo';
// $batataDoce = str_pad($batata, 20);
// $batataDoce = str_pad($batata, 20, "maltinoommm");
// $batataDoce = str_pad($batata, 20, "maltinoommm", STR_PAD_LEFT);
// $batataDoce = str_pad($batata, 20, "maltinoommm", STR_PAD_RIGHT);
$batataDoce = str_pad($batata, 20, "maltinoommm", STR_PAD_BOTH);
echo $batataDoce; // maltinooOvomaltinoom

echo "<hr>";

$string = str_repeat('Show rapaiz', 10);
echo $string; //Show rapaizShow rapaizShow rapaiz...

echo "<hr>";

echo strlen($string); // 110

echo "<hr>";

$text1 = "Eu em 2018: Cyberpunk será um jogo incrível!";
$text2 = str_replace("2018", "2021", $text1);
$text2 = str_replace("será um jogo incrível!", "Ficou mt ruim...", $text2);

echo $text2;

echo "<hr>";

echo strpos($text2, 'Cyberpunk'); // 12