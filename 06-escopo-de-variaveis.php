<?php
// ESCOPO GLOBAL
$nome = "Victor Amaral";

// function exibeNome(){    ERRO
//     // ESCOPO LOCAL
//     echo $nome;
// }

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";
//////////////////////////////////////////

// function exibeCidade() { ERRO
//     $cidade = "Rio de Janeiro";
// }

// exibeCidade();
// echo $cidade; cidade está no escopo local da função

function exibeCidade() {
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;

echo "<hr>";
//////////////////////////////////////////

$a = 1;
$b = 3;
$c = 5;

// erro
// function soma() {
//     ESCOPO LOCAL
//     echo $a + $b + $c; 
// }
 
function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();