<?php
//verifica login
function validaLogin($senha,$email){
    $link = conectaBancoDados();
       
    $query = "SELECT * "//selecione todos
            . "FROM usuarios "//da tabela usuarios
            . "WHERE email='{$email}' "//quando email, for igual ao email passado
            . "LIMIT 1";//limite a consulta a 1 registro
    $res = mysqli_query($link,$query);//executa a query anterior
    
    $sql = mysqli_num_rows($res);
    
    if($sql>0){
        return true;
    }else{
        return false;
    }
}