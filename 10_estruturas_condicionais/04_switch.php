<?php

$value = readline('escolha de 1 á 3: ');

switch ($value) {
    case 1:
        echo "você digitou 1 \n";
        break;
    case 2:
        echo "você digitou 2 \n";
        break;
    case 3:
        echo "você digitou 3 \n";
        break;
    default:
        echo "Número inválido \n";
}
