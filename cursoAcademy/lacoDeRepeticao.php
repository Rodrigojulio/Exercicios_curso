<?php
/*
$name = ['a','b','c', 'd', 'e', 'f'];

//LAÇO DE REPETIÇÃO FOR

echo '<hr>';


for ($i = 0; $i<count($name); $i++){
    echo $name[$i];
}



for ($i = 0; $i<10; $i++){
    echo "{$i} <hr>";
}


for ($i = 10; $i>0; $i--){
    echo "{$i} <hr>";
}



echo '<hr>';

//LAÇO DE REPETIÇÃO FOREACH


$names = [
    'a'=> 'aa' ,
    'b'=> 'bb',
    'c'=> 'cc', 
    'd'=> 'dd', 
    'e'=> 'ee', 
    'f'=> 'ff',
    'g'=> 'gg',
    'h'=> 'hh'
];


foreach ($names as $key => $name1) {
    echo "{$key} => {$name1} <br>";
}
*/

//LAÇO DE REPETIÇÃO WHILE

$nomess = ['a', 'b', 'c'];

$i = 0;

while ($i < count($nomess)) {
    echo $nomess[$i];

    $i++;
}

echo '<hr>';


$a=1;

do {
    echo $a;
    $a++;

} while ($a <= 10);