<?php

function sacar (array $conta, float $valorASacar)
{
    if ($valorASacar > $conta ['saldo']) {
        exibeMensagem ('Você não pode sacar');
        } else {
            $conta['saldo'] -= $valorASacar;
        }

        return $conta;
}


function deposito(array $conta, float $valorADepositar)
{
    if($valorADepositar > 0) { // O VALOR ELE PRECISA SER MAIOR QUE ZERO
        $conta['saldo'] += $valorADepositar;
        
    }else {
        exibeMensagem('Valor Precisa Ser Positivo');
    }

    return $conta;
}




function exibeMensagem (string $mensagem) //SUB-ROTINAS SÃO FUNÇÕES ONDE O PROGRAMA NÃO RETORNA NENHUM VALOR.
{
    echo $mensagem;
    echo '<hr>';
}


function exibeConta (array $conta)
{
    ['titular'=> $titular, 'saldo'=> $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
    //echo "<li>Titular: $conta[titular] . saldo: {$conta['saldo']} </li>";
}





