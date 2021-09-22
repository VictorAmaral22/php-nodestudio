<?php
// Constantes

define("NOME", "José Carlos");
echo NOME; // José Carlos

// define("NOME", "José Bezerra"); // erro

define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);

var_dump(NOME);     // C:\wamp64\www\cursophp.com\07-consts.php:13:string 'José Carlos' (length=12)
var_dump(IDADE);    // C:\wamp64\www\cursophp.com\07-consts.php:14:int 24
var_dump(ALTURA);   // C:\wamp64\www\cursophp.com\07-consts.php:15:float 1.89
var_dump(CASADO);   // C:\wamp64\www\cursophp.com\07-consts.php:16:boolean true

echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA.'.';

echo "<hr>";

define('TIMES', ['Vasco', 'Flamengo', 'Santos']);
echo TIMES[0];

echo "<hr>";

// Consts são globais
function exibeNome() {
    echo NOME;
}
exibeNome();