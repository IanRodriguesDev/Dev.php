<?php
//array asssociatiovo.
$dados = [
    'nome'  => 'Vinicius',
    'nota'  => 10,
    'idade' => 24
];
//['nome' => $nome, 'data' => $data, 'idade' => $idade] = $dados;

//Pega um array, pega todas suas chaves e as mesmas viram variaveis
extract($dados);
var_dump($idade, $nome, $nota);

//Pega varias variaveis e transforma em uma array
var_dump(compact('nome', 'nota', 'idade'));
 