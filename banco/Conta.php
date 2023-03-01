<?php

class Conta 
{
    private string $titular;
    //private string $nomeTitular;
    private float $saldo = 0;
    private static $numeroDeContas = 0;



    public function __construct(string $titular)
    {   /*
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        
        $this->nomeTitular = $nomeTitular;
        */
        $this->titular = $titular;
        $this->saldo = 0;
        
        self::$numeroDeContas++;

        //Conta::$numeroDeContas++;
    }


    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo){
            echo "saldo indisponivel";
            return;
        }

        $this->saldo -= $valorASacar;        
        
    }
    
    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        
        }
        $this->saldo += $valorADepositar;
        
    }

    public function transferir(float $valorATranferir, conta $contaDestino): void
    {
        if ($valorATranferir > $this->saldo) {
            echo "saldo indisponível";
            return;
        }

        $this->sacar($valorATranferir);
        $contaDestino->depositar($valorATranferir);        
        
    }
/*
    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }


   public function recuperaNomeTitular(): string
   {
    return $this->titular->recuperaNome();
   }
    

   public function recuperaCpfTitular(): string
   {
    return $this->titular->recuperaCpf();
   }
*/


    public static function recuperaNumeroDeContas(): int
    {
        return Conta:: $numeroDeContas;
    }


}   
/*

$primeiraConta = new Conta();
{
    $primeiraConta-> cpfTitular  = '104.026.127-28';
    $primeiraConta-> nomeTitular = 'Rodrigo';
    $primeiraConta-> saldo = 12000;
}

echo $primeiraConta;
*/
