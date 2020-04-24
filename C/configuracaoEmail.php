<?php
function configuracaoEmail($email){
    //configuração de envio de email pelo sistema
    $dominio = "http://www.itapoainfo.com.br/V/";//caminho do dominio do site
    $dataHora = base64_encode(date("Y-m-d H:i:s"));//codifica a data e hora atual
    $emailCodificado = base64_encode($email);//codifica email
    $msg = $dataHora.$emailCodificado;//mensagem enviada via GET para recuperação de senha
    $emailPara = "$email";//email do destinatário
    $emailDe = "";//email do remetente, configurado no servidor do domínio
    $emailAssunto = "KTAG: Recuperação de Senha";//assunto campo assunto do email
    $emailMensagem = "<a href=\"{$dominio}alteraSenha.php?msg={$msg}\">clique aqui</a> para recuperar sua senha";//mensagem de envio (deve ter menos de 70 caracteres)
    $emailCabecalhos =  "From: {$emailDe} \r \n"
                        . "Reply-To: {$emailDe} \r \n"
                        . "X-Mailer: PHP/".phpversion();//cabeçalho do email
                        
    //se alguma configuração não estiver preenchida, retorne o devido erro
    if(!$emailPara){//se destinatário não estiver configurado
        return alertas('E01');
    }
    if(!$emailDe){//se remetente não estiver configurado
        return alertas('E02');
    }
    if(!$emailAssunto){//se assunto não estiver configurado
        return alertas('E03');
    }
    if(!$emailMensagem){//se mensagem não estiver configurado
        return alertas('E04');
    }
    if(!$emailCabecalhos){//se cabeçalho não estiver configurado
        return alertas('E05');
    }
    
    if(mail($emailPara, $emailAssunto, $emailMensagem, $emailCabecalhos)){//envia email com os dados configurados
        return alertas('S01');//retorna mensagem de sucesso
    }
}