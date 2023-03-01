<?php 

$a = 2;
$b = 8;

$resultado = $a + $b;
echo "O resultado da Soma entre {$a} + {$b} = {$resultado} <hr>";

$resultado = $a - $b;
echo "O resultado da Soma entre {$a} + {$b} = {$resultado} <hr>";

$resultado = $a * $b;
echo "O resultado da Soma entre {$a} + {$b} = {$resultado} <hr>";

$resultado = $a / $b;
echo "O resultado da Soma entre {$a} + {$b} = {$resultado} <hr>";

$resultado = $a % $b;
echo "O resultado da Soma entre {$a} + {$b} = {$resultado} <hr>";


//OPERADORES LOGICOS 
// && E IGUAL AO AND E O || E IGAUL AO OR DE PREFERENCIA EM USAR && OU || 
if ($a == $b && $a == 2) {
    echo 'No IF';
}else {
    echo 'No ELSE';
}

echo '<hr>';

if ($a == $b || $b == 8) {
    echo 'No IF';
}else {
    echo 'No else';
}

echo '<hr>';


if (($a != $b && $b == 8) || $a ==2) {
    echo 'No IF';
}else {
    echo 'No ELSE';
}

echo '<hr>';


if (($a != $b && $b == 8) || $a ==3) {
    echo 'No IF';
}else {
    echo 'No ELSE';
}

echo '<hr>';


if (($a != $b && $b == 8) && $a ==3) {
    echo 'No IF';
}else {
    echo 'No ELSE';
}

echo '<hr>';

if (($a == $b && $b == 8) && $a ==3) {
    echo 'No IF';
}else {
    echo 'No ELSE';
}

echo '<hr>';


//OPERADORES RELACIONAIS - COMPARAÇÃO/RELACIONAL


$c = 8;
$d = 9;
// O === ELE E O COMPARADOR PRA SABER SE E IGAL A DO MESMO TIPO. ISSO QUER DIZER QUE AS VARIAVEIS PRECISAM TER O VALOR IGUAL E SER DO MESMO TIPO.  
if ($c === $d) {
    echo 'IF';
}else {
    </head>
    echo 'ELSE';
}

echo '<hr>';

//NESTE CASO TENDO MESMO AS VARIAVEIS TENDO O MESMO VALOR, O SEU TIPO SÃO DIFERENTES A VARIAVEL $E ELA E INTEIRA E A $F ELA E UMA STRING. 
$e = 8;
$f = '8';
if ($e === $f) {
    echo 'IF';
}else {
    echo 'ELSE';
}

echo '<hr>';

//NESTE CASO AS DUAS VARIAVEIS SÃO DO MESMO TIPO E DO MESMO VALOR. 
$g = '8';
$h = '8';
if ($g === $h) {
    echo 'IF';
}else {
    echo 'ELSE';
}

echo '<hr>';