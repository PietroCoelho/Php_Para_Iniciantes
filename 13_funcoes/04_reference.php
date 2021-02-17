<?php

function AddTenWithoutReference(int $value): int
{
    return $value + 10;
}

$myValue = 20;

echo "{$myValue}\n";
$myValue = AddTenWithoutReference($myValue);
echo "{$myValue}\n";

echo "\n";

function AddTen(int &$value): void
{
    $value += 10;
}

$myValue = 20;

echo "{$myValue}\n";
AddTen($myValue);
echo "{$myValue}\n";
