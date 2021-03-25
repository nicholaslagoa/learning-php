<?php
session_start();//como esse serviço trabalhará com sessões, precisa-se dar session_start()

function setMensagemErro(string $mensagem) : void{//método set
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function getMensagemErro() : ?string{//método get, detalhe no ? para se permitir retornar null em certas situações
    if(isset($_SESSION['mensagem-de-erro'])){//se a mensagem de erro da sessão foi iniciada
        return $_SESSION['mensagem-de-erro'];//retorna o valor da mensagem-de-erro
    }
    return null;//retorna nada se não entrar no if acima, se a mensagem-de-erro não tiver sido iniciada na sessão
    //detalhe nesse null, não se pode usar pra retornar uma string, porém com ?, torna-se possível
}

function setMensagemSucesso(string $mensagem) : void{//método set
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function getMensagemSucesso() : ?string{//método get, detalhe no ? para se permitir retornar null em certas situações
    if(isset($_SESSION['mensagem-de-sucesso'])){//se a mensagem de sucesso da sessão foi iniciada
        return $_SESSION['mensagem-de-sucesso'];//retorna o valor da mensagem-de-sucesso
    }
    return null;//retorna nada se não entrar no if acima, se a mensagem-de-sucesso não tiver sido iniciada na sessão
    //detalhe nesse null, não se pode usar pra retornar uma string, porém com ?, torna-se possível
}

function removerMensagemSucesso() : void{//apaga pra não ter 2 mensagens juntas
    if(isset($_SESSION['mensagem-de-sucesso'])) {
        unset($_SESSION['mensagem-de-sucesso']);//unset elimina o que tiver setado em mensagem-de-sucesso
    }
}

function removerMensagemErro() : void{//apaga pra não ter 2 mensagens juntas
    if(isset($_SESSION['mensagem-de-erro'])){
        unset($_SESSION['mensagem-de-erro']);//unset elimina o que tiver setado nessa posição mensagem-de-erro
    }
}