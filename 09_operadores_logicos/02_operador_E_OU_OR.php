<?php
// Se for ISSO e/ou ISSO
$a = 1 == 1 || 2 == 2; //true
//    true      true

$b = 1 == 1 || 2 == 1; //true
//    true      false

$c = 2 == 1 || 2 == 2; //true
//    false      true

$d = 1 == 2 || 2 == 1; //false
//    false      false

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
