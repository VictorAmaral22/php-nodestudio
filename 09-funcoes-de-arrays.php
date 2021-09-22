<?php
/*
 *  is_array($array) - verifica se uma var é um array
 *  in_array($valor, $array) - verifica se um determinado valor existe dentro do array
 *  array_keys($array) - retorna um novo array com as chaves do array informado
 *  array_values($array) - retorna um novo array com os valores do array informado
 *  array_merge($array1, $array2) - faz o merge
 *  array_pop($array) - exclui a última posição
 *  array_shift($array) - exclui a primeira posição 
 *  array_unshift($array, "valor") - adiciona um ou mais elementos no início do array
 *  array_push($array, "valor", "valor") - adiciona um ou mais elementos no fim do array
 *  array_combine($keys, $values) - mescla os arrays informados
 *  array_sum() - calcula a soma dos elementos de um array
 *  explode("/", "20/01/2001") - transforma string em array
 *  implode("-", $arr) - transforma array em string
*/

// IN_ARRAY
$nomes = array("Rodrigo", "Felipe", "Maria", "José");
echo is_array($nomes); // 1 == true
echo in_array("Rodrigo", $nomes); // 1

echo "<br>";

if(in_array("Carlos", $nomes)):
    echo "Existe no Array!";
else: 
    echo "Não existe no Array!";
endif;
echo "<hr>";

// ARRAY_KEYS
$keys = array_keys($nomes);
print_r($keys); // Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 )
echo "<hr>";

// MERGE
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");
$veiculos = array_merge($carros, $motos);

print_r($veiculos); // Array ( [0] => Camaro [1] => Uno [2] => Gol [3] => Pop100 [4] => 50cc [5] => cb1000 )
echo "<br>";

$carros2 = array("Chevrolet"=>"Camaro", "Fiat"=>"Uno", "Wolksvagen"=>"Gol");
$motos2 = array("Yamaha"=>"Pop100", "Chevrolet"=>"50cc", "Fiat"=>"cb1000");
$veiculos2 = array_merge($carros2, $motos2);

print_r($veiculos2); // Array ( [Chevrolet] => 50cc [Fiat] => cb1000 [Wolksvagen] => Gol [Yamaha] => Pop100 )