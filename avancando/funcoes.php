<?php


function depositar($conta, $valorADepositar)
{ 
    if($conta ['saldo'] > 0){
        $conta ['saldo'] += $valorADepositar;
    }
    else{
        echo 'Este valor é impossivel des se depositar';
    }
    return $conta;

}

function sacar($conta, float $valorASacar) : array
{
    if ($valorASacar> $conta['saldo']){
        exibeUmaMensagem('Vocẽ não pode sacar este valor');
    }else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeUmaMensagem($mensagem)
 { 
    echo $mensagem . '<br>';
}

function titularComLetrasMaiusculas(array $conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>titular: $titular. saldo: $saldo</li>";
}