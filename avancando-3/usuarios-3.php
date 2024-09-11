<?php

//STRLEN => Ele entrega o numero de bytes dentro de uma variável que você coloca como parametro.

$email = 'vinicius@alura.com.br';
$senha = '123';

if (strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
} 

$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoDoArroba ) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;