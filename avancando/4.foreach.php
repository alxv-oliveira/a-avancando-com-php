<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.689-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

echo PHP_EOL;

// Questão Opcional
$carros = [
    'LMS-2312' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'NHA-1212' => [
        'marca' => 'Ford',
        'modelo' => 'Mustang'
    ]
];

foreach ($carros as $placa => $carro) {
    echo $placa . ': ' . $carro['marca'] . PHP_EOL;
}

foreach ($carros as $placa => $carro) {
    echo "Carro - Placa: $placa _ Marca: $carro[marca] _ Modelo: $carro[modelo]" . PHP_EOL;           // Printando formas complexas modelo Simples
}
foreach ($carros as $placa => $carro) {
    echo "Carro - Placa: $placa _ Marca: {$carro['marca']} _ Modelo: {$carro['modelo']}" . PHP_EOL;   // Printando formas complexas modelo Strings Complexas
}
