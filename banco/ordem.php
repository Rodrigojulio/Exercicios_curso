<?php
/*
$notas = [
    10,
    8,
    9,
    7

];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

var_dump($notas) . '<hr>';

echo 'Desordenadas' . '<hr>';
var_dump($notas);

echo 'Ordenadas' . '<hr>';
var_dump($notas); 




$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

sort(&array:$notas);
var_dump ($notas);
*/


$notas = [
    'Ana'       => null,
    'Rodrigo'   => 8,
    'João'      => 9,
    'Lucas'     => 7,
    'Gabriel'   => 6

];
/*
asort($notas);
var_dump($notas);
echo '<hr>';

arsort($notas);
var_dump($notas);
echo '<hr>';

var_dump(array_is_list($notas));
echo '<hr>';

var_dump(isset($notas['Ana']));
echo '<hr>';

var_dump(array_key_exists('Rodrigo', $notas ));
echo '<hr>';

//array_key_exist = verifica se a chave existe
// in_array = verifica se o valor existe
//isset = verifica se a chave existe e não e nulo
*/

echo array_search(8, $notas);
echo '<hr>';

echo array_search(10, $notas);
echo '<hr>';

ksort($notas);
var_dump($notas);
echo'<hr>';

if (is_array($notas)) {
    echo 'Sim, é umarray' . '<hr>';
}

var_dump(array_is_list($notas));

echo 'Ana fez a prova: '. '<hr>';

echo 'Alguém tirou 10?' . '<hr>';
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . '<hr>';
