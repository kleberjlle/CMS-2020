<?php
function populaTabelas(){
    $email = 'kleberjlle@gmail.com';
    $senha = password_hash('123', PASSWORD_BCRYPT);
    $sql = validaLogin($senha,$email);
    
    if($sql){
        $msg = "Banco de Dados já configurado.<br />"
            . "Tente acessar, com o usuário: Kleber<br />"
            . "Senha: 123";
        return $msg;
    }else{
        $link = conectaBancoDados();
        //tabela usuarios
        $query = "INSERT INTO usuarios (nome, sobrenome, email, senha) "//insira na tabela usuarios os seguintes dados
            . "VALUES ('Kleber','Pereira de Almeida', 'kleberjlle@gmail.com', '{$senha}')";
        mysqli_query($link, $query);//executa a query anterior
        $msg = "Banco de Dados configurado com sucesso!";
        return $msg;
    }
    
}