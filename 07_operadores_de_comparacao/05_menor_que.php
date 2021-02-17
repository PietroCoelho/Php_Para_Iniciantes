<?php
$a = 1 < 1; //false
$b = 1 < 2; //true

var_dump($a);
var_dump($b);

$c = 1 < '2'; //true ele indentifica os valores, mas não o formato
$d = 'a' < 'A'; //false não é conveniente utilizar com letras
var_dump($c);
var_dump($d);
