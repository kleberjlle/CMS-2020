<?php
//responsável pela configuração inicial do BD
function populaTabelas(){
    $email = 'kleberjlle@gmail.com';//email padrão de cadastro
    $senha = password_hash('123', PASSWORD_BCRYPT);//senha inicial do email cadastrado
    $sql = validaEmail($email);//chama função que verifica se já existe este usuário e senha
    
    //verifica se existe cadastro no retorno da validação
    if($sql == $email){//caso sim, exibe mensagem de existência
        return true;
    }else{//caso não, configura usuário e senha no bd
        $link = conectaBancoDados();
        //tabela usuarios
        $query = "INSERT INTO usuarios (nome, sobrenome, email, senha) "//insira na tabela usuarios os seguintes dados
            . "VALUES ('Kleber','Pereira de Almeida', 'kleberjlle@gmail.com', '{$senha}')";
        mysqli_query($link, $query);//executa a query anterior
        desconectaBancoDados();
        return alertas('S03');
    }
}
//insere dados na tabela logAlteraSenha
function insertLogAlteraSenha($dataHora,$id){
    $link = conectaBancoDados();//conecta ao bd
    
    $query = "INSERT INTO logAlteraSenha (dataHora,usuarios_idusuarios) "//insira na tabela usuarios os seguintes dados
            . "VALUES ('{$dataHora}', '{$id}')";
    mysqli_query($link, $query);//executa a query anterior
    desconectaBancoDados();
    return alertas('S02');
}
