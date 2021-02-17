<?php
$a = 1 === 1; // true além de ser igual com relação aos valores tem que ser igual ao formato
$b = 1 === 2; // false

var_dump($a);
var_dump($b);

$c = 1 === '1'; // false
$d = 'a' === 'A'; // false
var_dump($c);
var_dump($d);
