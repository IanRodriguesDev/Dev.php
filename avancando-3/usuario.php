<?php

//SUBSTR => Retira uma parte de uma string salva em uma variável que voce usa como parametro
//que vai começar na posição que voce coloar, e terminar na que voce tambem coloca como parametro
//se voce não por um limite e só o início ela vai até o fim da variável.

$email = 'vinicius@alura.com.br';

echo substr($email,0,8) . PHP_EOL;
echo substr($email, 9,) . PHP_EOL;