<?php
include_once '../M/conexao.php';//incorpora arquivo de conexão com BD
include_once '../M/select.php';//incorpora arquivo de select
include_once './funcoes.php';//incorpora arquivo responsável pelas funções
include_once '../M/desconexao.php';

$config = populaTabelas();//verifica se o sistema está com as tabelas populadas

if($config === true){//se as tabelas já estiverem populadas
    $email = validaEmail($_POST['email']); //passa email para validação
    
    //se email estiver incorreto
    if ($email != $_POST['email']) {
        header("Location: ../V/index.php?msg1={$email}"); //vá para index com o erro
    } else {//senão
        $login = validaSenha($_POST['senha'], $email); //verifica se a senha coincide com a cadastrada
        
        //se o retorno da senha for idêntico a true
        if ($login === true) {
            header("Location: ../V/T/painel.php"); //permita acesso ao painel
        } else {//senão
            header("Location: ../V/index.php?msg2={$login}&email={$email}");//vá para index com o erro
        }
    }
}else{//senão
    $codigo = "S03";
    header("Location: ../V/alertas.php?codigo={$codigo}&msg={$msg}");
}