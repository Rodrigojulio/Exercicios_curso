<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/cpf.php';






$endereco = new Endereco(cidade:'Rio de Janeiro', bairro:'Cascadura', rua:'Rua Barbosa Rodrigues', numero:'198');
$vinicius = new Titular(new cpf(numero:'104.026.127-28'), nome:'Rodrigo Julio');
var_dump($primeiraConta);

$primeiraConta->depositar(valorADepositar:500);
$primeiraConta->sacar(valorASacar:300); // isso é ok
//$primeiraConta->saldo -=300; // isso não e ok

echo $primeiraConta->recuperaTitular();
echo $primeiraConta->recuperaCpfTitular();
echo $primeiraConta->recuperarSaldo();

$segundaConta = new Titular(new cpf(numero:'113.010.267-00'), nome:'Nathalia Ronay');
var_dump($segundaConta);

$segundaConta->depositar(valorADepositar:23000);
var_dump($segundaConta);

$segundaConta->sacar(valorASacar:10000);
var_dump($segundaConta);


$outra = new Titular(new cpf(cpf:'123.456.789-10', nome:'DIAS'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();


//echo Conta:: recuperaNumeroDeContas();
