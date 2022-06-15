<?php

$nome = "eduardo";//Com e maiusculo
$sobrenome = "SANTOS"; // com S maiusculo

$nome2 = "Daiane sena vieira";//com as primeiras letras maiusculas

echo "Nome: ". ucfirst($nome) . PHP_EOL;

echo "Sobrenome " . ucfirst(strlowercase($sobrenome)) . PHP_EOL;

echo "Nome2: " . ucwords($nome2);