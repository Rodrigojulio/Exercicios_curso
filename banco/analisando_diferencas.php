<?php

$notasDoBimentre1 = [
    'Ana'       => 10,
    'Rodrigo'   => 8,
    'João'      => 9,
    'Lucas'     => 7,
    'Gabriel'   => 6

];


$notasDoBimentre2 = [
    
    'Rodrigo'   => 8,
    
    'Lucas'     => 2,
    'Gabriel'   => 6
    

];


// ESSA FUNÇÃO ELA RETORNA DIFERENTES ARRAYS
var_dump(array_diff_key($notasDoBimentre1, $notasDoBimentre2));
echo '<hr>';

var_dump(array_diff($notasDoBimentre1, $notasDoBimentre2));
echo '<hr>';

var_dump(array_diff_assoc($notasDoBimentre1, $notasDoBimentre2));
echo '<hr>';


function key_compare_func($notasDoBimentre1, $notasDoBimentre2)
{
    if ($notasDoBimentre1 === $notasDoBimentre2) {
        return 0;
    }
    return ($notasDoBimentre1 > $notasDoBimentre2)? 1:-1;
}

$resultado = array_diff_uassoc($notasDoBimentre1, $notasDoBimentre2, "key_compare_func");

print_r($resultado);

$alunosFaltantes = array_diff_key($notasDoBimentre1, $notasDoBimentre2);
echo '<hr>';


var_dump (array_keys($alunosFaltantes));
echo '<hr>';
var_dump(array_values($alunosFaltantes));
echo '<hr>';

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);



var_dump(array_combine($nomesAlunos, $alunosFaltantes));
echo '<hr>';
var_dump(array_flip($nomesAlunos, $alunosFaltantes));
