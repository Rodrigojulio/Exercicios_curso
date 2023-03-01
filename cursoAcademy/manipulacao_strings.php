<?php

$name = 'EspecializaTi - Curso online de Ti';

//TRANSFORMA TODAS AS PALAVRAS EM MAIUSCULAS
echo strtoupper($name);
echo '<hr>';

//TRANSFORMA TODAS AS PALAVRAS EM MINUSCULAS
echo strtolower($name);
echo '<hr>';

//TRANSFORMA A PRIMEIRA LETRA EM MAIUSCULA
echo ucfirst($name);
echo '<hr>';


//VOCÊ PODE USAR AO MESMO TEMPO DUAS FUNÇÕES, NESTE EXEMPLO VOCÊ ESTA COLOCANDO TODAS AS PALAVRAS EM MINUSCULAS E DEPOIS VOCÊ ESTA COLOCANDO A PRIMEIRA LETRA EM MAIUSCULA. 
echo ucfirst(strtolower($name));
echo '<hr>';


// DA MESMA FORMA EU IREI COLOCAR IRIEI INCIAR COLOCANDO TODAS AS PALAVRAS EM MINUSCULAS E DEPOIS IREI COLOCAR TODAS AS PALAVRAS A PRIMEIRA LETRA EM MAIUSCULA. E A MELHOR FOMAR PARA TITULOS.
echo ucwords(strtolower($name));
echo '<hr>';



//NESTA FUNÇÃO ELE VAI TRANFORMAR NOSSA STRING TODA EM UM ARRAY
$state = 'São Paulo/SP';
$arrayState = explode('/', $state); // TEM QUE INFORMAR O DELIMITADOR PARA O EXPLODE SABER O LIMITE E A VARIAVEL, PODE USAR QUALQUER CARACTERE DENTRO DA STRING PARA SER O DELIMITADOR

var_dump($arrayState);
echo '<hr>';

//COM O STATE EU POSSO INDICAR A POSIÇÃO DO ARRAY QUE EU QUERO QUE SEJA EXIBIDA.
var_dump($arrayState[0]);
echo '<hr>';

var_dump($arrayState[1]);
echo '<hr>';

$state1 = 'Rio de janeiro, e a cidade mais importante do Brasil, desta forma, podemos dizer que ser importate e necessario';
$arrayState1 = explode(',', $state1);

var_dump($arrayState1);
echo '<hr>';

var_dump($arrayState1[0]);
echo '<hr>';

var_dump($arrayState1[2]);
echo '<hr>';

var_dump($arrayState1[3]);
echo '<hr>';

var_dump($arrayState1[1]);
echo '<hr>';


$info = 'São Paulo/SP/Brasil/Terra';
$arrayState = explode('/', $info);
var_dump($info);
echo '<hr>';



//A FUNÇÃO IMPLODE ELE TRANSFORMA O ARRAY NUMA STRING. 

$numero = [1,2,3,4,5,6];
 
echo implode($numero);
echo '<hr>';



//FUNÇÃO PARA TIRAR ESPAÇOS DO INCIO E DO FINAL DE UMA STRIN, E MUITO UTLIZADO PARA ENTRADA DE INFORMAÇÕES PARA O BANCO DE DADOS, ESSA FUNÇÃO ELA FAZ UMA LIMPEZA NAS INFORMAÇÕES DO USUARIO.

$nome = ' EsécialistaTi   ';
var_dump($nome);
echo '<hr>';
/*
var_dump(ltrim($nome)); // TIRA ESPAÇO NO INICIO
echo '<hr>';

var_dump(rtrim($nome)); // TIRA ESPAÇO DO FINAL
echo '<hr>';
*/

var_dump(trim($nome)); // ELE E O MAIS UTILIZADO POR ELE TIRA OS ESPAÇOS DO INICIO E DO FINAL
echo '<hr>';




// NA FUNÇÃO STR_REPLACE VOCÊ VAI SUBSTITUIR NO INCIO DO SEU STRING QUALQUER COISA, PODE SER PRA COLOCAR NADA OU ATE OUTRA STRING

$domain = 'http://www.cursodorodrigo.com.br';

//echo str_replace('www.', 'http://www.',$domain);
//echo '<hr>';


// NA FUNÇÃO SUBSTR, ELE IRA RETORNAR UM DETERMINADO NUMERO DE ELEMENTOS DENTRO DA STRING

echo substr($domain,0, 4);
echo '<hr>';

echo substr($domain,4 , 14);
echo '<hr>';

echo substr($domain, -14);
echo '<hr>';


$protocol = substr($domain, 0, 5);

if ($protocol == 'https'){
   echo 'É seguro!';
}else
   echo 'Não é seguro!';    

echo '<hr>';    

//ESSA FUNCÇÃO SERVE PARA CONTAR A QUANTIDADE DE LETRAS DENTRO DA UMA STRING
echo strlen($domain);

