<?php
$value = "vermelho";

do {
    echo "Parado!\n";

    $value = (int) readline("Digite o status do sinal: \n");
} while ($value !== ("verde"));
echo "Livre\n";
