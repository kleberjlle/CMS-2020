<?php
//verifica login
function validaEmail2($email){
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
    desconectaBancoDados();
}