<?php
//atualiza senha
function updateAlteraSenha($dataHora,$email,$senha){
    $link = conectaBancoDados();//conecta ao bd
    $query = "UPDATE usuarios "//atualize a tabela usuarios
            . "SET senha='$senha' "//configurando os seguintes campos
            . "WHERE email='$email'";//quando email for igual a email passado
    $res = mysqli_query($link,$query);//retorna o resultado
    
    $id = selectAlteraSenha($email);//função que retorna o ID do email informado
    desconectaBancoDados();
    return insertLogAlteraSenha($dataHora,$id);
}