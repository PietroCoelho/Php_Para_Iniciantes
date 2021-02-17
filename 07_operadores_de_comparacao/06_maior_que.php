<?php
$a = 1 > 1; //false
$b = 2 > 1; //true

var_dump($a);
var_dump($b);

$c = '2' > 1; //true 
$d = 'a' > 'A'; //true não é conveniente utilizar com letras
var_dump($c);
var_dump($d);
