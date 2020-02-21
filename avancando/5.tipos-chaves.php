<?php

$array = [
    1 => 'a',
    '1' => 'b',     // PHP converter Strings numeros em numeros;
    1.5 => 'c',     // Converte float para um inteiro;
    true => 'd'     // Vai converter pra inteiro;
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}