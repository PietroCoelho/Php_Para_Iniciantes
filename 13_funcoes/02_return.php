<?php

function Welcome(): void
{
    $name = readline('Digite seu nome: ');
    echo "Seja bem vindo {$name}\n";
    // gettype($name);
}

Welcome();
function WelcomeWithReturn(): string
{
    $name = readline('>> Digite seu nome: ');
    return ">> Seja bem vindo {$name}\n";
}

echo WelcomeWithReturn();
