<?php 

//COMO BOA PRATICA E SEMPRE BOM INFORMAR O TIPO DE INFORMÇÃO QUE A FUNÇÃO IRA RETORNAR SE E UMA STRING, INT E ETC....
function testFunction(): string 
{
    // NUNCA COLOCAR ECHO DENTRO DE UMA FUNÇÃO SEMPRE USAR RETURN, E COLOCAR O ECHO FORA DA
    return'Sou uma função <br>';
}

// A FUNÇÃO PODE SER CHAMADA MAIS DE UMA VEZ 
// COMO NESTE EXMPLO


echo testFunction();
echo testFunction();
echo testFunction();
echo testFunction();
echo testFunction();


// DENTRO DA FUNÇÃO EU POSSO INFORMAR O TIPO DA FUNÇÃO
function pt(string $value)
{
    echo "{$value} <br>";
}
/*
$test = 123;

pt($test);
pt(321);
pt('algo');
pt(90);
pt(129);
*/


// ESSA FUNÇÃO ELA SOMA DOIS VALORES INTEIROS, ESSES VALORES SERÃO INFORMADOS NA VARIAVEL N1 E N2
function sum(int $n1, int $n2): int
{
    return $n1 + $n2;
}
// NO PRINT DO ECO VOCE INORMA DOIS VALORES INTEIROS PARA SOMA NESTE CASO SERIA MELHOR INFORMAR BOOLEAN = BOOL
echo sum(12, 90);
function sumTwo (int $n1, int $n2, int $taxa = 12): int
{
    return($n1 + $n2) * $taxa;
    
}
echo '<hr>';
echo sumTwo(12, 85);
echo '<hr>';
echo sumTwo(350, 850, 4);

// VARIAVEIS EM FUNÇOES NO PHP E USO GLOBAL


$taxa = 2;


//PARA USAR UMA VARIAVEL GLOBAL DENTRO DA FUNÇÃO EU DEVO USAR A FUNÇÃO GLOBAL
function sol(int $n3, int $n4): array
{// NA HORA DE INFORMAR A FUNÇÃO GLOBAL VOCE TAMBEM DEVE INFORMAR NO RETURN A VARIAVEL GLOBAL
    global $taxa;

    $teste = 12;
    $soma = ($n3 + $n4) * $taxa; 
    //PARA RETORNAR MAIS DE UM VALOR NA FUNÇÃO VOCE DEVE USAR O ARRAY 
    return [
        'teste' =>$teste,
        'soma' => $soma,
    ];
}

// QUANDO EXISTE UM ARRY NUMA FUNÇÃO EU NÃO POSSO USAR O ECHO, EU POSSO ATE USAR NO ECHO SO QUE IREI TER QUE INOFORMAR O ELEMENTO DO ARRAY. NA BOA PRATICA EU DEVO GUARDAR O RESULTADO DENTRO DE UMA VARIAVEL
echo '<hr>';
echo sol(12, 5)['soma'];

echo '<hr>';
$resultado = sol(58, 6);
var_dump($resultado['soma']); 

echo '<hr>';
echo sol(33, 9)['teste'];


//FUNÇÕES RECURSIVAS - SÃO FUNÇÕES QUE CHAMAM ELA MESMA 

/* CHAMAR NUMERO NO FATORIAL
4 => 4*3*2*1
2 => 2*1
3 => 3*2*1
*/

function factorial(int $number): int
{
    if 
        ($number <= 1);
        $number = $number
    else     
        $number *= factorial($number-1);
    //return $number = $number * factorial($number-1);
    //return $number *= factorial($number-1);
    
    return $number;
}

 echo factorial(1);
