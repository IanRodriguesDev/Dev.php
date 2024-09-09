<?php

$notasBimestre1 = [
    'Ana' => 10,
    'Joao' => 9,
    'Maria' => 8,
    'Robert'=> 7,
    'Vinicius' => 6
];
$notasBimestre2 = [
    'Ana' => 10,
    'Joao' => 9,
    'Maria' => 8,
    'Robert'=> 7,

];

$alunosFaltantesSegundaProva = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantesSegundaProva);
$notasAlunos = array_values($alunosFaltantesSegundaProva);
$nomesNotasAlunos =(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($nomesNotasAlunos));