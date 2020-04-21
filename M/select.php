<?php
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
            return alertas('I02');//email recebe falso(0)
        }
    }else{
        return alertas('I01');//E-> Error, A-> Atenção, I-> Informação, S-> Sucesso/ 01-> posição
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
        $_SESSION[usuarioAtual][0] = $row[0];//idusuarios
        $_SESSION[usuarioAtual][1] = $row[1];//nome
        $_SESSION[usuarioAtual][2] = $row[2];//sobrenome
        $_SESSION[usuarioAtual][3] = $row[3];//email
        $senhaAtual = $row[4];//senha
    }
    if(password_verify($senha, $senhaAtual)){
        header("Location: ../V/T/painel.php");//caso verdadeiro, vá para o painel
    }else{
        return alertas('I03');
    }
    desconectaBancoDados();   
}