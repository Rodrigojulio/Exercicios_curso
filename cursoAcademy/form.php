<?php 

// para selecionar todas as variaveis e do precionar o Ctrl + D

// O FORMATO REQUEST ELE PEGA TANTO POST COMO GET, ISSO PODE TRAZER MAIOR GANHO DE BENEFICIOS, MAIS ISSO TAMBÉM PODE TRAZER UMA LENTIDÃO, SEMPRE VERIFICAR O QUE E MAIS VALIDO A SER FEITO 

/*
echo "Nome:{$_REQUEST['nome']}";
echo '<hr>'; 

echo "Senha:{$_REQUEST['senha']}";
echo '<hr>'; 

echo "E-mail:{$_REQUEST['email']}";
echo '<hr>'; 

echo "Concordou? " . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Não'; 
echo '<hr>'; 

echo "Sexo:{$_REQUEST['sexo']}";
echo '<hr>'; 

echo "Estado:{$_REQUEST['estado']}";
echo '<hr>'; 

echo "Descrição:{$_REQUEST['descricao']}";
echo '<hr>'; 
*/

/*
echo "Nome:{$_POST['nome']}";
echo '<hr>'; 

echo "Senha:{$_POST['senha']}";
echo '<hr>'; 

echo "E-mail:{$_POST['email']}";
echo '<hr>'; 

echo "Concordou? " . isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Não'; 
echo '<hr>'; 

echo "Sexo:{$_POST['sexo']}";
echo '<hr>'; 

echo "Estado:{$_POST['estado']}";
echo '<hr>'; 

echo "Descrição:{$_POST['descricao']}";
echo '<hr>'; 
*/

// VALIDAÇÃO DE INFORMAÇÕES


if ($_REQUEST['nome'] == '' && strlen($_REQUEST['nome'] <= 3)) {
    echo 'O campo Nome é invalido!';

    return;
    
}elseif ($_REQUEST['senha'] == '' && strlen($_REQUEST['senha'] < 0)) {
    echo ' Você precisa colocar uma senha';

    return;

}elseif ($_REQUEST['email'] == '' && strlen($_REQUEST['email'] < 0)) {
    echo ' Você precisa colocar uma senha';

    return;

}elseif (empty($_REQUEST['concordo'] != '' )) { // SEMPRE COLOCAR EMPTY PARA VALIDAR SE UMA CAIXA ESTA SELECIONADA
    echo ' Você precisa selecionar o condordo';

    return;
}elseif (empty($_REQUEST['sexo'] != '')) {
    echo 'Você precisa selecionar uma das opções';

    return;

}elseif(empty($_REQUEST['estado'] != '')) {
    echo 'Você precisa selecionar um estado';

    return;

}elseif ($_REQUEST['descrição'] == '' && strlen($_REQUEST['email'] <= 0)) {
    echo ' Você precisa colocar uma senha';

    return;
}


echo "Nome:{$_REQUEST['nome']}";
echo '<hr>'; 

echo "Senha:{$_REQUEST['senha']}";
echo '<hr>'; 

echo "E-mail:{$_REQUEST['email']}";
echo '<hr>'; 

echo "Concordou? " . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Não'; 
echo '<hr>'; 

echo "Sexo:{$_REQUEST['sexo']}";
echo '<hr>'; 

echo "Estado:{$_REQUEST['estado']}";
echo '<hr>'; 

echo "Descrição:{$_REQUEST['descricao']}";
echo '<hr>'; 