<?php

function geraEmail(string $nome): void
{
    $conteudoDoEmail = <<<FINAL
    Olá, $nome!
    estamos entrando em contato para 
    {motivo do contato}

    {assinatura}

    FINAL;
     echo $conteudoDoEmail;
}

geraEmail('Vinicius Disas');