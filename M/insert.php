<?php
function populaTabelas(){
    $email = 'kleberjlle@gmail.com';
    $senha = password_hash('123', PASSWORD_BCRYPT);
    validaLogin($senha, $email);
    
    //tabela usuarios
    /*
    $query = "INSERT INTO usuarios (nome, sobrenome, email, senha) "//insira na tabela usuarios os seguintes dados
            . "VALUES ('Kleber','Pereira de Almeida', 'kleberjlle@gmail.com', '{$senha}')";
    mysqli_query($link, $query);//executa a query anterior
     * 
     */
}