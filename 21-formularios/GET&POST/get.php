<?php

$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Seu nome é $nome e seu email é $email.<br>";

var_dump($_GET);

/* URL */
/* http://cursophp.com/21-formularios/get.php?nome=Vitones&email=baguiedoido%40hotmail.com */

/*
    C:\wamp64\www\cursophp.com\21-formularios\get.php:8:
    array (size=2)
    'nome' => string 'Vitones' (length=7)
    'email' => string 'baguiedoido@hotmail.com' (length=23)
 */

echo "<hr>";

echo $_GET['sobrenome'];
/* http://cursophp.com/21-formularios/get.php?idade=25&sobrenome=Fulaninho */