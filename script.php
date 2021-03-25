<?php
session_start();//inicia a sessão para se trabalhar com sessions e precisa ser acima do resto
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
    $_SESSION['mensagem-de-erro'] = 'Name cant be empty, please enter a valid name.';//se der return, ele fica no script.php o que é errado
    header('location: index.php');//aqui, ele retorna para o index por via do comando header que pede uma string 'location: x.php' sendo x o arquivo
    return;
}
else if(strlen($nome) < 3){//função PHP que verifica a lenght de uma string
    $_SESSION['mensagem-de-erro'] = 'Name cant be that short, please enter a valid name.';//se der return, ele fica no script.php o que é errado
    header('location: index.php');//aqui, ele retorna para o index por via do comando header que pede uma string 'location: x.php' sendo x o arquivo
    return;
}
else if(strlen($nome) > 20){
    $_SESSION['mensagem-de-erro'] = 'Name cant be that long, please enter a valid name.';//se der return, ele fica no script.php o que é errado
    header('location: index.php');//aqui, ele retorna para o index por via do comando header que pede uma string 'location: x.php' sendo x o arquivo
    return;
}
else if(is_numeric($nome)){
    $_SESSION['mensagem-de-erro'] = 'Name invalid, please enter a valid name.';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Age invalid, please enter a valid age.';//se der return, ele fica no script.php o que é errado
    header('location: index.php');//aqui, ele retorna para o index por via do comando header que pede uma string 'location: x.php' sendo x o arquivo
    return;
}
else if($idade > 120 || $idade < 1){
    $_SESSION['mensagem-de-erro'] = 'Age invalid, please enter a valid age.';//se der return, ele fica no script.php o que é errado
    header('location: index.php');//aqui, ele retorna para o index por via do comando header que pede uma string 'location: x.php' sendo x o arquivo
    return;
}

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
        if($categorias[$i] == 'infantil'){
            $_SESSION['mensagem-de-sucesso'] = "The swimmer " . $nome . " competes in the children's category";
            header('location: index.php');
            return;
        }
    }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
        if($categorias[$i] == 'adolescente'){
            $_SESSION['mensagem-de-sucesso'] = "The swimmer " . $nome . " competes in the teen category";
            header('location: index.php');
            return;
        }
    }
}else if($idade >= 19 && $idade <= 65){
    for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
        if($categorias[$i] == 'adulto'){
            $_SESSION['mensagem-de-sucesso'] = "The swimmer " . $nome . " competes in the adult category";
            header('location: index.php');
            return;
        }
    }
}else{
    $_SESSION['mensagem-de-sucesso'] = "The swimmer " . $nome . " cant compete on any category";
    header('location: index.php');
    return;
}