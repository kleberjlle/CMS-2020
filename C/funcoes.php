<?php
//verifica email
function validaEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){//se realmente é um email
        return validaEmail2($email);
        //verificar se existe o email cadastrado
    }else{
        return alertas('I01');//E-> Error, A-> Atenção, I-> Informação, S-> Sucesso/ 01-> posição
    }
}

function validaSenha($senha,$email){
    $link = conectaBancoDados();//armazena conexão do BD
       
    $query = "SELECT * "//selecione todos
            . "FROM usuarios "//da tabela usuarios
            . "WHERE email='{$email}' "//quando email, for igual ao email passado
            . "LIMIT 1";//limite a consulta a 1 registro
    $res = mysqli_query($link,$query);//executa a query anterior
    
    //ja que o email está correto, verifique agora a senha
    while ($row = mysqli_fetch_array($res)) {
        $usuarioAtual[0] = $row[0];
        $usuarioAtual[1] = $row[1];
        $usuarioAtual[2] = $row[2];
        $usuarioAtual[3] = $row[3];
        $usuarioAtual[4] = $row[4];
    }

    if(password_verify($senha, $usuarioAtual[4])){
        return true;//caso verdadeiro, vá para o painel
    }else{
        return alertas('I03');
    }
    desconectaBancoDados();    
}

//gera mensagens de alertas de acordo com o código passado
function alertas($codigo){
    $l = substr($codigo, 0, -2);//extrai o primeiro caracter do código
    $n = substr($codigo, -2);//extrai os dois último caracteres do código
    
    if($l == 'E'){//E-> Error, algo crítico que possa comprometer o sistema
        
    }
    if($l == 'A'){//A-> Atenção, esta ação pode ter resultados insatisfatórios
        
    }
    if($l == 'I'){//I-> Informação, traz informativo do sistema
        switch ($n) {
            case '01':
                return $msg = "I01: Email inválido.";//mensagem referente ao código passado
                break;
            case '02':
                return $msg = "I02: Email não localizado em nossos cadastros.";//mensagem referente ao código passado
                break;
            case '03':
                return $msg = "I03: Senha incorreta, tente novamente.";//mensagem referente ao código passado
                break;
            default:
                break;
        };
    }
    if($l == 'S'){//S-> Sucesso, ação realizada com sucesso
        
    }
}