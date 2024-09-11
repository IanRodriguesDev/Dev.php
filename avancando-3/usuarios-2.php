<?php

//STRPOS => Busca a posição de uma string que você determina como parametro que buscara dentro de uma varável 
//que você tambem ultiiza como parametro.

$email = 'vinicius@alura.com.br';

$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoDoArroba ) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;