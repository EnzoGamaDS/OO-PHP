<?php

namespace Model\account;

class Conta
{
    private Titular $titular;
    private static int $numeroDeContas = 0;


    public function __construct($titular)
    {
        $this->titular = $titular;
        $this->saldoTitular = 0 ;
        // Atribuindo dados a propria classe *Dados estaticos não mudam de instancia pra instancia
        Conta::$numeroDeContas++; 
    }

    public function __destruct()
    {
        // O destruct é chamado automaticamente após o unset ser utilizado
       /* if (self::$numeroDeContas > 2) {
            echo "Há mais de uma conta ativa";
        }*/

        self::$numeroDeContas--;
    }

    function saca(float $valorSacar): void {
        if ($valorSacar > $this->saldoTitular) {
            echo 'valor acima do saldo';
            return;
        }
            $this->saldoTitular -= $valorSacar;
    }

    function deposita(float $valorDeposito): void {
        if ($valorDeposito < 0 ) {
            echo 'O valor deve ser positivo';
            return ;
        }
            $this->saldoTitular += $valorDeposito;
    }
    
    public function trasfereDinheiro(float $valorDaTransferencia, Conta $contaDestino): void {
        if ($valorDaTransferencia > $this->saldoTitular) {
            echo 'Saldo insuficiente';
            return ;
        }
            $this->saca($valorDaTransferencia);
            $contaDestino->deposita($valorDaTransferencia);
    }

    public function pegaSaldo(): float {
        return $this->saldoTitular;
    }

    public static function quantidadeDeContas(): int {
        //return Conta::$numeroDeContas;
        return self::$numeroDeContas; 
    }

}