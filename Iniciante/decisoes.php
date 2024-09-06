<?php

$idade = 21;
$numeroDePessoas = 1;

echo "Você só pode entrar, se tiver mais de 18 anos ou\n A partir de 16 acompanhado". PHP_EOL; 
    
if ($idade>= 18) {
    echo "Vocẽ pode entrar";
}   
elseif($idade >= 16 && $numeroDePessoas >2) {
        echo "Você tem $idade e está acompanhado. Pode entrar";
}   
else{
        echo "Você só tem $idade você não pode entrar sozinho";
}