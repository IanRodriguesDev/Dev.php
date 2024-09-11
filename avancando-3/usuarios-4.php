<?php

//STRTOUPPER => Faz com que todos as letras comuns da string que voce coloca como parametro
//fiquem em letras maiusculas.
//STRTOLOWER => Faz com que todos as letras comuns da string que voce coloca como parametro
//fiquem em letras minusculas.

$email = 'vinicius@alura.com.br';
$senha = '123';

if (strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
} 

$posicaoDoArroba = strpos($email, '@');
$ususario = substr($email,0, $posicaoDoArroba);

echo strtoupper($ususario) . PHP_EOL;
echo strtolower($ususario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;