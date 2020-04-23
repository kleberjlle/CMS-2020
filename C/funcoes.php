<?php
//gera mensagens de alertas de acordo com o código passado
function alertas($codigo){
    $l = substr($codigo, 0, -2);//extrai o primeiro caracter do código
    $n = substr($codigo, -2);//extrai os dois último caracteres do código
    
    if($l == 'E'){//E-> Error, algo crítico que possa comprometer o sistema
        
    }
    if($l == 'A'){//A-> Atenção, esta ação pode ter resultados insatisfatórios
        switch ($n) {
            case '01':
                return $msg = "A01: Email inválido.";//mensagem referente ao código passado
                break;
            case '02':
                return $msg = "A02: Email não localizado.";//mensagem referente ao código passado
                break;
            case '03':
                return $msg = "A03: Senha incorreta, tente novamente.";//mensagem referente ao código passado
                break;
            default:
                break;
        };
    }
    if($l == 'I'){//I-> Informação, traz informativo do sistema
        
    }
    if($l == 'S'){//S-> Sucesso, ação realizada com sucesso
        
    }
}