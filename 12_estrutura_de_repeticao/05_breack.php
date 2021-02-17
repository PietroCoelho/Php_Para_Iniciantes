<?php
$numberMessages = (int) readline("Digite o número de mensagens desejadas: \n");

for ($count = 0; $count < $numberMessages; $count++) {
    echo "{$count} - Messagem \n";
    if ($count === 5) {
        break;
    }
}
