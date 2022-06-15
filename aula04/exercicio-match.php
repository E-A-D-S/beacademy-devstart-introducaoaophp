<?php

$mes = 3;

echo match ($mes) {
    1 => "janeiro",
    2 => "fevereiro",
    3 => "março",
    3 => "abril",
    3 => "maio",
    3 => "junho",
    3 => "julho",
    3 => "agosto",
    3 => "setembro",
    3 => "outubro",
    3 => "novembro",
    3 => "dezembro",

    default => "mes invalido"

};