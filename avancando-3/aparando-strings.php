<?php

//LTRIM =>Faz a mesma coisa que a função trim só que só da esquerda da váriavel.
//RTRIM =>Faz a mesma coisa que a função trim só que só da direita da váriavel.

$csv =', Vinicius Dias,34';

echo trim($csv, ',.') . PHP_EOL;
echo ltrim($csv, ',.') . PHP_EOL;
echo rtrim($csv, ',.') . PHP_EOL;