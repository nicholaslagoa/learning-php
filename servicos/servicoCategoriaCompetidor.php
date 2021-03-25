<?php
//não precisa dar sessionstart(), AQUI SE FAZ APENAS A DEFINIÇÃO DE CATEGORIA DE COMPETIDOR
function defineCategoriaCompetidor(string $nome, string $idade) : ?string{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    //antes de definir as categorias, passa-se pela validação criada no servicoValidacao
    if(validaNome($nome) && validaIdade($idade)){//só fara a definição case retorne verdadeiro
        removerMensagemErro();//usar a função pra apagar, senão fica aparecendo junto
        if($idade >= 6 && $idade <= 12){
            for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
                if($categorias[$i] == 'infantil'){
                    setMensagemSucesso("The swimmer " . $nome . " competes in the children's category");
                    //header('location: index.php');
                    return null;
                }
            }
        }else if($idade >= 13 && $idade <= 18){
            for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
                if($categorias[$i] == 'adolescente'){
                    setMensagemSucesso("The swimmer " . $nome . " competes in the teen category");
                    //header('location: index.php');
                    return null;
                }
            }
        }else if($idade >= 19 && $idade <= 65){
            for($i = 0; $i <= count($categorias)-1; $i++){//detalhe na função count com o -1, sem isso dará erro pois não existe mais indice
                if($categorias[$i] == 'adulto'){
                    setMensagemSucesso("The swimmer " . $nome . " competes in the adult category");
                    //header('location: index.php');
                    return null;
                }
            }
        }else{
            setMensagemSucesso("The swimmer " . $nome . " cant compete on any category");
            //header('location: index.php');
            return null;
        }
    }else{
        removerMensagemSucesso();//mesma coisa, pra não aparecer junto
        return getMensagemErro();//se não der, retorna a função getMensagemErro do servicoMensagemSessao
    }
}