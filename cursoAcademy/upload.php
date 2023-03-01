<?php


echo '<pre>';
var_dump($_FILES);


/*
$photo = $_FILES['imagem'];
$path = 'cursoAcademy/img';

if (move_uploaded_file($photo['tmp_name'], $photo['name'])) {
    echo 'Sucesso!';

}else {
    echo 'Falhou';
}
*/
/*
$dir = 'cursoAcademy/img';

if (isset($_FILES['name'])) {
    //$ext = strtolower(substr($_FILES['name']));
    move_uploaded_file($_FILES['name'], $dir);
    echo 'Imagem enviada com Sucesso!';  
}
*/