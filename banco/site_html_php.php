<?php


require_once 'funcoes.php';

$contasCorrentes = [
    '104.026.127-28' =>[
        'titular'   => 'Rodrigo',
        'saldo'     => 3567.01
    ],
    '110.267.987-56' => [
        'titular'   => 'Nathália',
        'saldo'     => 78567.01
    ],
    '134.987.567-00' => [
        'titular'   => 'Agostinho',
        'saldo'     => 876.01
    ],
    '454.987.675-78' => [
        'titular'   => 'Manoel',
        'saldo'     =>  7.01
    ],
    '334.987.876-98' => [
        'titular'   => 'Raphael',
        'saldo'     =>  7765.01
    ]
     
];



$contasCorrentes['104.026.127-28'] = sacar($contasCorrentes['104.026.127-28'], valorASacar:  500);

$contasCorrentes['454.987.675-78'] = sacar($contasCorrentes['454.987.675-78'], valorASacar:  500);

$contasCorrentes['334.987.876-98'] = sacar($contasCorrentes['334.987.876-98'], valorASacar: 500);

$contasCorrentes['454.987.675-78'] = deposito($contasCorrentes['454.987.675-78'],  valorADepositar:  1000.00);

/*
//QUANDO EU QUERO EXECUTAR UMA LISTA DO HTML
echo "<ul>";


foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}

echo "</ul>";
*/ // QUANDO EU QUERO INFORMAR PRO MEU CODIGO EM PHP QUE AS PROXIMAS LINHAS SERÃO EM HTML EU DEVO INFORMAR O 
?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3> <?php echo $conta['titular'];?> - <?php echo $cpf; ?></h3>
        </dt>
        
        <dd>
        saldo: R$ <?= $conta['saldo']; ?>
        </dd>
        <?php }  ?>
    </dl>    
</body>
</html>
