<?php
$a = 1 !== 1; // false porque não é diferente
$b = 1 !== 2; // true

var_dump($a);
var_dump($b);

$c = 1 !== '1'; // true porque ele é diferente com relação ao tipo do dado
$d = 'a' !== 'A'; // true
var_dump($c);
var_dump($d);
