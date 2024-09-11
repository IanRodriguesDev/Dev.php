<?php

//EXPLODE => Divide uma string com base em outra string

$nome = 'Vinícius Dias';
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

list($nome, $sobrenome) = (explode(' ', $nome));
echo "Nome: $nome" . PHP_EOL;
echo "Sobrenome: $sobrenome" . PHP_EOL;

$csv = "Vinicíus Dias, 24 , vinicius@alira.com.br";
var_dump(explode(',', $csv));
