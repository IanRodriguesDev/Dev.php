<?php

require_once '/home/ian-carlos/Área de trabalho/Projects/php-primeiros-passos/Projeto/src/Conta.php';
require_once '/home/ian-carlos/Área de trabalho/Projects/php-primeiros-passos/Projeto/src/Titular.php';

// Criando a primeira conta
$igor = new Titular('111.222.333-55', 'Igor Calixto');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
$titular = new Titular('111.222.333-55', 'Igor Calixto');
echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpf() . PHP_EOL; 
echo $primeiraConta->recuperaNome() . PHP_EOL; 

$joao = new Conta(new Titular('431.342.646-56', 'João Francisco'));
var_dump($joao);

$outra = new Conta(new Titular('755.947.432-63', 'Rafael Alves'));
unset($segundaConta);
echo Conta::recuperarNumeroContas();
