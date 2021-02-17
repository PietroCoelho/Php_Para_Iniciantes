<?php
$array = ['pietro', 'silva', 'coelho'];

foreach ($array as $fullname) {
    echo "->{$fullname}\n";
}

// Chave e Valor
$indice = [
    'introduction' => 'Geneses',
    'content' => 'exodo',
    'the end' => 'leviticos'
];

foreach ($indice as $key => $value) {
    echo "->{$key} - {$value}\n";
}
