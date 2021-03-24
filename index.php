<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 28;
/*var_dump($nome);
var_dump($idade);*/

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
        if($categorias[$i] == 'infantil'){
            echo "O nadador " . $nome . " compete na categoria infantil";
        }
    }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
        if($categorias[$i] == 'adolescente'){
            echo "O nadador " . $nome . " compete na categoria adolescente";
        }
    }
}else{
    for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
        if($categorias[$i] == 'adulto'){
            echo "O nadador " . $nome . " compete na categoria adulto";
        }
    }
}
