<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

echo "Seu nome é $nome e seu email é $email.<br>";

var_dump($_POST);

/*
    C:\wamp64\www\cursophp.com\21-formularios\dados.php:8:
    array (size=3)
        'nome' => string 'Vitão' (length=6)
        'email' => string 'victoramaral@gmail.com' (length=22)
        'Enviar' => string 'Enviar' (length=6) Se o botão enviar for um input
 */