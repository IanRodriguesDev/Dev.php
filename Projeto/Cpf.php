<?php

class Cpf{
    private string $cpf;
    function __construct(string $cpf){
        $this->cpf = $cpf;
        $this->validarCpf($cpf);
    }
    function cpfLimpo($cpf){
        $cpf = trim($cpf);
        $cpf = preg_replace('/[.-]/', '', $cpf);
        return $cpf; 
        
    }
    
    function validarCpf($cpf){
        $cpfLimpo = $this->cpfLimpo($cpf);
        var_dump($cpfLimpo);
        $cpfArray = str_split(string: $cpf);
        for ($i = 10; $i >= 2; $i--){
            var_dump($i);
           foreach($cpfArray as $numero){
            $numeros=intval($numero);
           }
        }
        echo $resultado = $i * $numeros;
    }
}

$teste = new Cpf('145.382.206-10');
