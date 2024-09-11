<?php

$array =[
    'um',
    'dois',
    'tres'
];

foreach ($array as $numeral => $nomeNumero){
    echo "$numeral em português é $nomeNumero" . PHP_EOL;
}
print "Total: " . count($array) . PHP_EOL;