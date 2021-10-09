<?php
/** Operdadores de Repetição
 * While
 * Do While
 * For
 * Foreach
 */

$i = 0;
while($i < 3):
    echo "Contando $i<br>";
    $i++;
endwhile;

echo "<hr>";

$i = 0;
do {
    echo "Contando $i<br>";
    $i++;
} while($i < 3);

echo "<hr>";

for ($i=0; $i < 5; $i++) { 
    echo "Contando $i <br>";
}

echo "<hr>";

$array = ['Batata Doce', 'Frango', 'Ovo', 'Leite', 'Feijão'];
foreach ($array as $value) {
    echo $value."<br>";
}

echo "<hr>";

$array2 = ['Peito' => ['Flexão', 'Flexão Diamante', 'Archer Push Ups'], 'Abdômen' => ['Russian Twists', 'Leg Raises', 'Flutter Kicks']];
foreach ($array2 as $key => $value) {
    echo "<b>Exercícios para $key:<br></b>";
    foreach ($value as $exrc) {
        echo "- ".$exrc."<br>";
    }
    echo "<br>";
}