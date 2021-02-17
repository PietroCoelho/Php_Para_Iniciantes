<?php
$value = "vermelho";

while ($value !== ("verde")) {
    echo "Parado!\n";

    $value = (int) readline("Digite o status do sinal: \n");
}
echo "Livre\n";
