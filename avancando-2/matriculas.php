<?php

$alunos2023 = [
    0 => 'Ana',
    1 => 'Joao',
    2 => 'Maria',
    3 => 'Robert',
    4 => 'Vinicius'
];

$novosAlunos = [
    5 => 'Patricia',
    6 => 'Nico',
    7 => 'kilderson',
    8 => 'Daiane'
];

$alunos2024 = $alunos2023 + $novosAlunos; 
array_push($alunos2023, 'Alice', 'bob', 'Charle');
$alunos2023[] = 'Luiz';
array_unshift($alunos2023, 'Stephane', 'Rafaela');
array_pop($alunos2023);
var_dump($alunos2024); 
