<?php

$idadeList = [21,23,19,25,30,41,18];

echo count($idadeList) . PHP_EOL; // Função que contar o número de ele-
// mentos em um array

for($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
echo PHP_EOL;

// Exercício proposto:
$nomeList = array('João', 'Maria', 'Pedro', 'Ana');
for($i = 0; $i < count($nomeList); $i++) {
    echo $nomeList[$i] . PHP_EOL;
}