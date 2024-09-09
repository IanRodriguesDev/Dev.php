<?php


$notas = [
    [ 
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [ 
        'aluno' => 'Vinicius',
        'nota' => 6,
    ], 
    [ 
        'aluno' => 'Ana',
        'nota' => 9,
    ]
];

function ordenarNotas(array $nota1, array $nota2): int
{
return ($nota1['nota'] <=> $nota2['nota']);  
}

usort($notas, 'ordenarNotas');
var_dump($notas) . PHP_EOL;