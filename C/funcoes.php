<?php
//verifica email
function validaEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){//se realmente é um email
        return $email;//retorne o email
        //verificar se existe o email cadastrado
    }else{
        alertas('E01');//E-> Error, A-> Atenção, I-> Informação, S-> Sucesso/ 01-> posição
    }
}

//gera mensagens de alertas de acordo com o código passado
function alertas($codigo){
    $l = substr($codigo, 1, -2);//extrai o primeiro caracter do código
    $n = substr($codigo, -2);//extrai os dois último caracteres do código
    
    if($l == 'E'){//E-> Error, algo crítico que possa comprometer o sistema
        switch ($n) {
            case '01':
                $msg = "email inválido";//mensagem referente ao código passado
                break;
            default:
                break;
        };
    }
    if($l == 'A'){//A-> Atenção, esta ação pode ter resultados insatisfatórios
        
    }
    if($l == 'I'){//I-> Informação, traz informatico do sistema
        
    }
    if($l == 'S'){//S-> Sucesso, ação realizada com sucesso
        
    }
}