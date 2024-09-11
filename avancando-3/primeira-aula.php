<?php

//STR_CONTAIS =>  informa se uma string existe dentro da outra.

$nome = 'Vinicius Dias';
$ehDaMinhaFamilia = str_contains($nome, 'Dias');

//Imprindo o resultado da função str_contais.
if($ehDaMinhaFamilia){
    echo "$nome é da minha família" . PHP_EOL;
}else{
    echo "$nome não é da minha família" . PHP_EOL;
}

