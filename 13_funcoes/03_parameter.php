<?php

function BeautifullMessage(string $message): string
{
    return ">> {$message} <<\n";
}

echo BeautifullMessage('testando');

/**
 * Return the sum of all numbers.
 * @param array<int/float> $numbers
 * @return float
 */
function SumOfAllNumbers(array $numbers): float
{
    $result = 0;
var_dump($result);
    foreach ($numbers as $num) {
        $result += $num;
    }

    return $result;
}

echo SumOfAllNumbers([10, 15.5,  4.5]) . "\n";
