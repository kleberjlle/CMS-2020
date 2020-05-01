<?php
//encerra sessoes e faz logout
function sairSistema(){
    session_start();
    session_destroy();
    header("location: ../V/index.php");
}
//configura timezone
function timezone(){
    date_default_timezone_set('America/Sao_Paulo');
}

//gera mensagens de alertas de acordo com o código passado
function alertas($codigo){
    $l = substr($codigo, 0, -2);//extrai o primeiro caracter do código
    $n = substr($codigo, -2);//extrai os dois último caracteres do código
    
    if($l == 'E'){//E-> Error, algo crítico que possa comprometer o funcionamento do sistema
        switch ($n) {
            case '01':
                return $msg = "E01: O sistema não possui um destinatário de email configurado.";//mensagem referente ao código passado
                break;
            case '02':
                return $msg = "E02: O sistema não possui um remetente de email configurado.";//mensagem referente ao código passado
                break;
            case '03':
                return $msg = "E03: O sistema não possui um assunto de email configurado.";//mensagem referente ao código passado
                break;
            case '04':
                return $msg = "E04: O sistema não possui uma mensagem de email configurada.";//mensagem referente ao código passado
                break;
            case '05':
                return $msg = "E05: O sistema não possui um cabeçalho de email configurado.";//mensagem referente ao código passado
                break;
            case '06':
                return $msg = "E06: Tentativa indevida de acesso ao sistema.<br /> Endereço de IP: ";//mensagem referente ao código passado
                break;
            default:
                return $msg = "Erro Fatal: Mensagem de alerta não configurado.";
                break;
        };
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
                return $msg = "Erro Fatal: Mensagem de alerta não configurado.";
                break;
        };
    }
    if($l == 'I'){//I-> Informação, traz informativo do sistema
        
    }
    if($l == 'S'){//S-> Sucesso, ação realizada com sucesso
        switch ($n) {
            case '01':
                return $msg = "S01: Acesse seu email para alterar sua senha.";//mensagem referente ao código passado
                break;
            case '02':
                return $msg = "S02: Senha alterada com sucesso.";//mensagem referente ao código passado
                break;
            case '03':
                return $msg = "S03: Tabela de acesso configurada (email: kleberjlle@gmail.com, senha: 123).<br /><a href=\"./index.php\">Clique aqui</a>";//mensagem referente ao código passado
                break;
            default:
                return $msg = "Erro Fatal: Mensagem de alerta não configurado.";//caso as confignurações de email estejam incorretas
                break;
        };
    }
}
