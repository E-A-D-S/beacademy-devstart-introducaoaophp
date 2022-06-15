<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, 'Eduardo'.PHP_EOL);
fwrite($arquivo, 'Daiane'.PHP_EOL);
fwrite($arquivo, 'Laís' .PHP_EOL);

fclose($arquivo);
