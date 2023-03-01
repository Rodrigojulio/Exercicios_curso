<?php

$alunos2021 = [
    'Ana',
    'Rodrigo',
    'João',
    'Lucas',
    'Gabriel'
];


$novosAlunos = [
    'Patricia',
    'Vinicius',
    'Paulo',
    'Ivete',
    'Simone'
];


/*
$alunos2022 =array_merge($alunos2021, $novosAlunos);

var_dump($alunos2022);
echo '<hr>';
*/


$alunos2022 = [...$alunos2021, 'Rodrigo Julio', ...$novosAlunos];

array_push($alunos2022, 'Aline', 'Bob', 'Debora');

$alunos2022[] = 'Maycon';

array_unshift($alunos2022, 'Stephane', 'Nicolas'); 


var_dump($alunos2022);
echo '<hr>';




$dados = [
    'nome' => 'Rodrigo',
    'nota' => 10,
    'idade'=> 38
];

extract($dados); // SO PODE SER FEITA POR DADOS QUE VOCÊ CONFIA OU VOCÊ JÁ LIMPOU

var_dump($nome, $nota, $idade);
echo '<hr>';

//array_filter() -> SERVE PARA PEGAR UM ARRAY E DEVOLVER EM UM NOVO ARRAY COM OS DADOS FILTRADOS

//array_map() -> PEGAR UM ARRAY MAPEAR E DEVOLVER PARA UM NOVO ARRAY COM OS VALORES MODIFICADOS

//array_reduce() -> PEGRA UM ARRAY E REDUZIR ESSE ARRAY 

