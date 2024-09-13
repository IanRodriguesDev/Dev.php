<?php

//STR_REPLACE => Substitui uma strning por outra dentro de uma várialvel. 

$texto = 'Texto com qualquer coisa poxa e caramba';
echo str_replace(
    ['poxa', 'caramba'],
    'ola',
    $texto
) . PHP_EOL;

echo strtr($texto, 'poxa', '***');