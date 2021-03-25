<?php
//novamente, não mexe com session, não bota sessionstart
//funções de validação devem sempre fazer SOMENTE a validação, portanto retirei bastante do código pra se organizar
function validaNome(string $nome) : bool{//mesmo script, só botei na função e troquei o return, que agora dá false
    if(empty($nome)){//função PHP que verifica se uma string está preenchida ou não
        //$_SESSION['mensagem-de-erro'] = 'Name cant be empty, please enter a valid name.';//se der return, ele fica no script.php o que é errado
        //header('location: index.php');//aqui, ele retorna para o index por via do comando header que pede uma string 'location: x.php' sendo x o arquivo
        setMensagemErro('Name cant be empty, please enter a valid name.');//agora só chama a função e seta a string sendo a mensagem de erro
        return false;
    }
    else if(strlen($nome) < 3){//função PHP que verifica a lenght de uma string
        //$_SESSION['mensagem-de-erro'] = 'Name cant be that short, please enter a valid name.';//se der return, ele fica no script.php o que é errado
        //header('location: index.php');//NÃO SERÁ UTILIZADO POR ESTE ARQUIVO SER CHAMADO POR OUTRO SCRIPT, E ELE SABERÁ O QUE FAZER COM A HEADER
        setMensagemErro('Name cant be that short, please enter a valid name.');
        return false;
    }
    else if(strlen($nome) > 20){
        //$_SESSION['mensagem-de-erro'] = 'Name cant be that long, please enter a valid name.';//se der return, ele fica no script.php o que é errado
        //header('location: index.php');//aqui, ele retorna para o index por via do comando header que pede uma string 'location: x.php' sendo x o arquivo
        setMensagemErro('Name cant be that long, please enter a valid name.');
        return false;
    }
    else if(is_numeric($nome)){
        //$_SESSION['mensagem-de-erro'] = 'Name invalid, please enter a valid name.';
        //header('location: index.php');
        setMensagemErro('Name invalid, please enter a valid name.');
        return false;
    }
    return true;//retorna true se não entrar em nenhum dos casos acima, que retornam false e encerram a função
}
function validaIdade(string $idade) : bool{
    if(!is_numeric($idade)){
        //$_SESSION['mensagem-de-erro'] = 'Age invalid, please enter a valid age.';//se der return, ele fica no script.php o que é errado
        //header('location: index.php');//aqui, ele retorna para o index por via do comando header que pede uma string 'location: x.php' sendo x o arquivo
        setMensagemErro('Age invalid, please enter a valid age.');
        return false;
    }
    else if($idade > 120 || $idade < 1){
        //$_SESSION['mensagem-de-erro'] = 'Age invalid, please enter a valid age.';//se der return, ele fica no script.php o que é errado
        //header('location: index.php');//aqui, ele retorna para o index por via do comando header que pede uma string 'location: x.php' sendo x o arquivo
        setMensagemErro('Age invalid, please enter a valid age.');
        return false;
    }
    return true;//FALTOU ISSO NA ULTIMA VEZ PRESTA ATENÇÃO AO TRABALHAR COM FUNÇÕES BOOL QUE PEDEM RETORNO
}