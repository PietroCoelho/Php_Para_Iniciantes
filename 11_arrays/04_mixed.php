<?php
// bagunçado
$mixed = [
    '5' => 'Pietro',
    [
        1, 5, 7, ['age' => 20]
    ]
];
var_dump($mixed);

// Bem estruturado
$mixed = [
    'name' => 'pietro',
    'numbers' => [
        1,
        5,
        7,
    ],
    'test' => [
        'age' => 20,
    ],
];
var_dump($mixed);
