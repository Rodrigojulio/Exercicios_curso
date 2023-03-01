<?php

$array = [
    0 => 'um',
    1 => 'dois',
    2 => 'tres'
];


// NO FOREACH EU ATRIBUO O MEU ARRAY A UMA VARIAVEL
//foreach ($array as $nomeNumero) {
//    echo $nomeNumero . '<hr>';
//}


//$contador = 0;
foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em portguês é: $nomeNumero" . '<hr>';
    //$contador++;
}

//echo "Total: $contador" . '<hr>';

echo "Total: " . count($array) . '<hr>';



