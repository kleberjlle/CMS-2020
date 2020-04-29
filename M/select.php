<?php
//seleciona o id do usuario
function selectAlteraSenha($email){
    $link = conectaBancoDados();//armazena conexão do BD
       
    $query = "SELECT idusuarios "//selecione todos
            . "FROM usuarios "//da tabela usuarios
            . "WHERE email='{$email}' "//quando email, for igual ao email passado
            . "LIMIT 1";//limite a consulta a 1 registro
    $res = mysqli_query($link,$query);//executa a query anterior
    
    //armazene os dados do usuário em sessões
    while ($row = mysqli_fetch_array($res)) {
        return $id = $row[0];//idusuarios
    }
    desconectaBancoDados();
}

//verifica login
function validaEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){//se realmente é um email
        $link = conectaBancoDados();//armazena conexão do BD
       
        $query = "SELECT * "//selecione todos
                . "FROM usuarios "//da tabela usuarios
                . "WHERE email='{$email}' "//quando email, for igual ao email passado
                . "LIMIT 1";//limite a consulta a 1 registro
        $res = mysqli_query($link,$query);//executa a query anterior
        $sql = mysqli_num_rows($res);//aramazena quantidade de linhas afetadas

        //verifica se houve linhas afetadas
        if($sql>0){//se houve linhas afetadas
            return $email;
        }else{//senão
            return alertas('A02');//email recebe falso(0)
        }
    }else{
        return alertas('A01');//E-> Error, A-> Atenção, I-> Informação, S-> Sucesso/ 01-> posição
    }
    desconectaBancoDados();
}

function validaSenha($senha,$email){
    session_start();
    $link = conectaBancoDados();//realiza conexão do BD
       
    $query = "SELECT * "//selecione todos
            . "FROM usuarios "//da tabela usuarios
            . "WHERE email='{$email}' "//quando email, for igual ao email passado
            . "LIMIT 1";//limite a consulta a 1 registro
    $res = mysqli_query($link,$query);//executa a query anterior
    
    //armazene os dados do usuário em sessões
    while ($row = mysqli_fetch_array($res)) {
        $_SESSION['usuarioAtual'] = [$row[0],$row[1],$row[2],$row[3]];//idusuarios
        $senhaAtual = $row[4];//senha
    }
    if(password_verify($senha,$senhaAtual)){
        return true;
    }else{
        return alertas('A03');
    }
    desconectaBancoDados();   
}