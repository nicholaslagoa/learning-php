<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = $_POST['nome'];//post para passar pelo body e a variavel que vai ser requisitada
$idade = $_POST['idade'];//post para passar pelo body e a variavel que vai ser requisitada
//var_dump($nome);
//var_dump($idade);

if(empty($nome)){//função PHP que verifica se uma string está preenchida ou não
    echo 'Name cant be empty';
    return;
}
if(strlen($nome) < 3){//função PHP que verifica a lenght de uma string
    echo 'Name cant have less than 3 characters';
    return;
}
if(strlen($nome) > 20){
    echo 'Name is too long';
    return;
}
if(!is_numeric($idade)){
    echo 'Age must be a number';
    return;
}
if($idade > 120 || $idade < 1){
    echo 'Please type a valid age';
    return;
}

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
        if($categorias[$i] == 'infantil'){
            echo "The swimmer " . $nome . " competes in the children's category";
        }
    }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
        if($categorias[$i] == 'adolescente'){
            echo "The swimmer " . $nome . " competes in the teen category";
        }
    }
}else if($idade >= 19 && $idade <= 65){
    for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
        if($categorias[$i] == 'adulto'){
            echo "The swimmer " . $nome . " competes in the adult category";
        }
    }
}else{
    echo "The swimmer " . $nome . " cant compete on any category";
}