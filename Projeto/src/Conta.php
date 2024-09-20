<?php

class Conta {
    private $titular;
    private $saldo;
    private static $numeroContas = 0;

    // Construtor para inicializar a conta
    public function __construct(Titular $titular) {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroContas++; // Usar self:: para acessar propriedades estáticas
    }

    public function __destruct(){
        self::$numeroContas--;
    }

    // Método para sacar dinheiro
    public function sacar(float $valorASacar): void {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorASacar;
        }
    }

    // Método para depositar dinheiro
    public function depositar(float $valorADepositar): void {
        if ($valorADepositar < 0) {
            echo "Valor inválido";
        } else {
            $this->saldo += $valorADepositar;
        }
    }

    // Método para transferir dinheiro para outra conta
    public function transferir(Conta $contaReceber, float $valorTransferencia): void {
        if ($valorTransferencia > $this->saldo) {
            echo "Saldo insuficiente";
        } else {
            $this->sacar($valorTransferencia);
            $contaReceber->depositar($valorTransferencia);
        }
    }

    // Método para recuperar o saldo
    public function recuperarSaldo(): float {
        return $this->saldo;
    }

    // Método estático para recuperar o número de contas
    public static function recuperarNumeroContas(): int {
        return self::$numeroContas;
    }
    public function recuperaCpf(): string {
        return $this->titular->recuperaCpf();
    }

    // Recupera o nome
    public function recuperaNome(): string {
        return $this->titular->recuperaNome();
    }

}
