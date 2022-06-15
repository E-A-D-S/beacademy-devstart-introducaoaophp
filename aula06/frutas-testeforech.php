<?php

$frutas = [
    "laranja",//0
     "banana",//1
     "abacaxi",//2

];
//adicionando nova fruta no array
$frutas[] = "maçã";//3

$frutas[10] = "melancia";//10

$frutas[7] = "morango";

$frutas[] = "tangerina";

?><?php

$frutas = [
    "laranja",//0
     "banana",//1
     "abacaxi",//2

];
//adicionando nova fruta no array
$frutas[] = "maçã";//3

$frutas[10] = "melancia";//10

$frutas[7] = "morango";

$frutas[] = "tangerina";

foreach ($frutas as $value) {
    echo "$value <br>";

}
