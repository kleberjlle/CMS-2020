<?php
function populaTabelas(){
    $email = 'kleberjlle@gmail.com';//email padrão de cadastro
    $senha = password_hash('123', PASSWORD_BCRYPT);//senha inicial do email cadastrado
    $sql = validaLogin($senha,$email);//chama função que verifica se já existe este usuário e senha
    
    //verifica se existe cadastro no retorno da validação
    if($sql){//caso sim, exibe mensagem de existência
        $msg = "Banco de Dados já configurado.<br />"
            . "Tente acessar, com o usuário: Kleber<br />"
            . "Senha: 123";
        return $msg;
    }else{//caso não, configura usuário e senha no bd
        $link = conectaBancoDados();
        //tabela usuarios
        $query = "INSERT INTO usuarios (nome, sobrenome, email, senha) "//insira na tabela usuarios os seguintes dados
            . "VALUES ('Kleber','Pereira de Almeida', 'kleberjlle@gmail.com', '{$senha}')";
        mysqli_query($link, $query);//executa a query anterior
        $msg = "Banco de Dados configurado com sucesso!";
        return $msg;
    }
    
}