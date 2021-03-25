<?php
//session_start();//inicia a sessão para se trabalhar com sessions e precisa ser acima do resto
//abaixo, como servicoMensagemSessao ja possui sessionstart, não se precisa colocar aqui
include "servicos/servicoMensagemSessao.php";//similar ao import, include
include "servicos/servicoCategoriaCompetidor.php";
include "servicos/servicoValidacao.php";

$nome = $_POST['nome'];//post para passar pelo body e a variavel que vai ser requisitada
$idade = $_POST['idade'];//post para passar pelo body e a variavel que vai ser requisitada

defineCategoriaCompetidor($nome, $idade);//simplesmente chama a função que fará tod o resto, script.php
//trabalha como realmente o script.php: redirecionará o que acontecer, para qual função usar naquele caso
header('location: index.php');