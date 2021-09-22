<?php
// Arrays

$carros = array("BMW", "Veloster", "Hilux");
// echo $carros; erro, pois existe uma function específica pra isso

print_r($carros); // Array ( [0] => BMW [1] => Veloster [2] => Hilux )
echo "<br>";

echo $carros[0]; // BMW
echo "<br>";

$carros2 = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
echo $carros[2]; // Veloster
echo "<br>";

$carros2[] = "Amarok";
$carros2[10] = "Camaro";

print_r($carros2); // Array ( [1] => BMW [2] => Veloster [3] => Hilux [4] => Amarok )
echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5]; // Suzuki
echo "<hr>";

$clientes = ["Rodrigo","Felipe","Bia"];
print_r($clientes); // Array ( [0] => Rodrigo [1] => Felipe [2] => Bia )
echo "<hr>";

// Count
echo count($carros); // 3
$totalCarros = count($carros); 

echo "<br>";

// Foreach
foreach($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

// Arrays associativos
$pessoa = array(
    "nome" => "Rodrigo", 
    "idade" => 23,
    "altura" => 1.75  
);
$pessoa["cidade"] = "Itabuna";

print_r($pessoa); // Array ( [nome] => Rodrigo [idade] => 23 [altura] => 1.75 [cidade] => Itabuna )
echo "<br>";

foreach($pessoa as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";

// Arrays multidimencionais
$times = array(
    "CARIOCAS" => array("Campeão"=>"Vasco", "Vice"=>"Flamengo", "Terceiro"=>"Botafogo"),
    "PAULISTAS" => array("Campeão"=>"Santos", "Vice"=>"São Paulo", "Terceiro"=>"Palmeiras"),
    "BAIANOS" => array("Campeão"=>"Bahia", "Vice"=>"Vitória", "Terceiro"=>"Itabuna")
);

foreach($times as $indice => $valor){
    echo $indice."<br>";
    foreach($valor as $indice => $valor){
        echo $indice.": ".$valor."<br>";
    }
    echo "<hr>";
}