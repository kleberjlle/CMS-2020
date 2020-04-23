<?php
function configuracaoEmail($email){
    //configuração de envio de email pelo sistema
    
    
    $emailPara = "$email";//email do destinatário
    $emailDe = "";//email do remetente, configurado no servidor do domínio
    $emailAssunto = "KTAG: Recuperação de Senha";//assunto campo assunto do email
    $emailMensagem = "clique aqui para recuperar sua senha";//mensagem de envio (deve ter menos de 70 caracteres)
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