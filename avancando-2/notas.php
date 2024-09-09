<?php

$notas = [
    'Ana' => 10,
    'Joao' => 9,
    'Maria' => 8,
    'Robert'=> 7,
    'Vinicius' => 6
];
krsort ($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim é uma array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Ana fez a prova' . PHP_EOL;
var_dump(isset($notas['Ana']));

 echo 'Alguem tirou 10?'. PHP_EOL;
 var_dump(in_array(10, $notas, true));
 
 echo 'Quem tirou 10:' . PHP_EOL;
 var_dump(array_search(10, $notas, true));