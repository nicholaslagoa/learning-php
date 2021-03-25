<?php
//session_start();//inicia a sessão para se trabalhar com sessions e precisa ser acima do resto
//NOVAMENTE, NÃO PRECISAR DAR SESSIONSTART POIS VAI DAR INCLUDE NO SERVICOMENSAGEMSESSAO
include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Application Form</title>
    <meta name="author" content="Nicholas Lagoa">
    <meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<body>
<p>COMPETITOR REGISTRATION FORM</p>
<form action="script.php" method="post"><!--script.php será responsável por processar os dados que forem enviados dentro desse formulário atráves do method=POST-->
    <?php
        /*FORMA SEM ENCAPSULAMENTO: $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';//verifica se a variavel de sessão foi iniciada, se foi, seta mensagem-de-erro, senão, vazio e segue abaixo
        if(!empty($mensagemDeSucesso)){//se não for vazio, o que cai no if acima pra saber se a sessão foi iniciada ou não de fato no navegador
            echo $mensagemDeSucesso;//mostra de fato a mensagem de erro respectiva acima do resto
        }

        $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';//verifica se a variavel de sessão foi iniciada, se foi, seta mensagem-de-erro, senão, vazio e segue abaixo
        if(!empty($mensagemDeErro)){//se não for vazio, o que cai no if acima pra saber se a sessão foi iniciada ou não de fato no navegador
            echo $mensagemDeErro;//mostra de fato a mensagem de erro respectiva acima do resto
        }*/
        $mensagemDeSucesso = getMensagemSucesso();//agora com encapsulamento, só chama a função pra get na mensagem de sucesso e atribui a var mensagemDeSucesso
        if(!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
        }
        $mensagemDeErro = getMensagemErro();//agora com encapsulamento, só chama a função pra get na mensagem de erro e atribui a var mensagemDeErro
        if(!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }
    ?>
    <p>Your name: <input type="text" name="nome"/></p><!--atenção nos names para recuperação no script-->
    <p>Your age: <input type="text" name="idade"/></p>
    <p><input type="submit" value="Send competitor data"/></p>
</form>
</body>
</html>