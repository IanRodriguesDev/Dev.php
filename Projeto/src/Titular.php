<?php

class Titular {
    private string $cpf;
    private string $nome;

    // Construtor público para poder instanciar a classe
    public function __construct(string $cpf, string $nome) {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);   
        $this->nome = $nome; 
    }

    // Recupera o CPF
    public function recuperaCpf(): string {
        return $this->cpf;
    }

    // Recupera o nome
    public function recuperaNome(): string {
        return $this->nome;
    }

    // Método para validar se o nome do titular é válido
    private function validarNomeTitular(string $nomeTitular){
        if (strlen(trim($nomeTitular)) < 5) {
            echo 'Nome precisa ter pelo menos 5 letras';
            exit();
        }
    }   
}
