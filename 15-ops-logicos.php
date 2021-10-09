<?php
/*  Operadores Lógicos */
// && - and
// || - or
// xor (exclusivo)
// ! (negação)

echo ("Fulaninho" == true) && ("Ciclaninho" == true) ? "Sim" : "Não"; // Sim
echo ("Fulaninho" == true) and ("Ciclaninho" == true) ? "Sim" : "Não"; // 1

echo ("Fulaninho" == true) || ("Ciclaninho" == true) ? "Sim" : "Não"; // Sim
echo ("Fulaninho" == true) or ("Ciclaninho" == true) ? "Sim" : "Não"; // 1

if(("Fulaninho" == true) xor ("Ciclaninho" == true)):
    echo "Só uma expressão é verdadeira";
else: 
    echo "Nenhuma, ou as duas expressões são verdadeiras"; // This one
endif;

if(!("Fulaninho" == true) xor ("Ciclaninho" == true)):
    echo "Só uma expressão é verdadeira"; // This one
else: 
    echo "Nenhuma, ou as duas expressões são verdadeiras";
endif;
