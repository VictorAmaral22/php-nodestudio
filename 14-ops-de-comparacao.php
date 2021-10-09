<?php
/*  Operadores de Comparação */
// ==
// !=
// ===
// !===
// <> - Diferente
// <
// >
// <=
// >=
// <=>

echo 10 == 10 ? "Sim" : "Não"; // Sim
echo 10 === "10" ? "Sim" : "Não"; // Não
echo 10 <> 10 ? "Sim" : "Não"; // Não

echo 2 <=> 3 ? "Se o direito for maior, ele retorna -1" : "Se o esquerdo for maior, ele retorna 1";
// var_dump(2 <=> 3);
// Se forem iguais ele retorna 0;