<?php
$a = [1, 2, 3];
// ADICIONA UM ELEMENTO AO FINAL
array_push($a ,4);
var_dump($a);
echo "\n";

// REMOVE O ULTIMO ELEMENTO
array_pop($a);
var_dump($a);
echo "\n";

// ADICIONA UM ELEMENTO AO INICIO
array_unshift($a,5);
var_dump($a);
echo "\n";

// REMOVE O PRIMEIRO ELEMENTO
array_shift($a);
var_dump($a);
echo "\n";

// EXIBE O ULTIMO VALOR DO ARRAY
var_dump(end($a));
echo "\n";

// CONTA A QUANTIDADE DE ELEMENTOS NUM ARRAY
var_dump(count($a));
echo "\n";

// VERIFICA SE UM VALOR EXISTE NUM ARRAY
var_dump(is_array($a));
echo "\n";
