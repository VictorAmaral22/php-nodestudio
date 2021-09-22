<?php
/*                  ESCALARES                  */


//       - string -
$nome = "Olá mundo 123 !@#";

var_dump($nome);    // esse comando mostra informações sobre a variável
//C:\wamp64\www\cursophp.com\04-tipos-de-dados.php:7:string 'Olá mundo' (length=10)

if(is_string($nome)) : 
    echo "É uma string"; // true
else: 
    echo "Não é uma string";
endif;

echo "<hr>";


//       - int -
$idade = 27;
$neg = -2;
$zer = 0;

var_dump($idade);   // C:\wamp64\www\cursophp.com\04-tipos-de-dados.php:20:int 27
var_dump($neg);     // C:\wamp64\www\cursophp.com\04-tipos-de-dados.php:23:int -2
var_dump($zer);     // C:\wamp64\www\cursophp.com\04-tipos-de-dados.php:24:int 0

if(is_int($idade)) : 
    echo "É uma inteiro"; // true
else: 
    echo "Não é um inteiro";
endif;

echo "<hr>";


//       - Float -
$altura = 1.77;     

var_dump($altura);  // C:\wamp64\www\cursophp.com\04-tipos-de-dados.php:38:float 1.77

if(is_float($altura)) : 
    echo "É uma float"; // true
else: 
    echo "Não é um float";
endif;

echo "<hr>";


//       - Boolean -
$admin = false;     
$user = true;

var_dump($admin);   // C:\wamp64\www\cursophp.com\04-tipos-de-dados.php:55:boolean false
var_dump($user);    // C:\wamp64\www\cursophp.com\04-tipos-de-dados.php:57:boolean true

if(is_bool($admin)) : 
    echo "É booleano"; // true
else: 
    echo "Não é booleano";
endif;

echo "<hr>";


/*                  COMPOSTOS                  */


//       - Array -
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);

var_dump($carros);
/*
C:\wamp64\www\cursophp.com\04-tipos-de-dados.php:74:
array (size=6)
  0 => string 'Gol' (length=3)
  1 => string 'Uno' (length=3)
  2 => string 'Camaro' (length=6)
  3 => int 12
  4 => float 20.6
  5 => boolean true
*/

if(is_array($carros)) : 
    echo "É array"; // true
else: 
    echo "Não é array";
endif;

echo "<hr>";


//       - Object -
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
} 

$cliente = new Cliente();
$cliente->atribuirNome("Victor");
var_dump($cliente);
/*
C:\wamp64\www\cursophp.com\04-tipos-de-dados.php:105:
object(Cliente)[1]
  public 'nome' => null
  public 'Victor' => string 'Victor' (length=6)
*/

if(is_object($cliente)) : 
    echo "É um objeto"; // true
else: 
    echo "Não é um objeto";
endif;

echo "<hr>";


/*                  ESPECIAIS                  */


//       - NULL -
$cidade = null;

var_dump($cidade);  // C:\wamp64\www\cursophp.com\04-tipos-de-dados.php:128:null

if(is_null($cidade)) : 
    echo "É null"; // true
else: 
    echo "Não é null";
endif;

echo "<hr>";

//      - Resource -
// É utilizado para fazer referência a recursos externos, como conexão com bancos de dados, manipulação de arquivos, etc...