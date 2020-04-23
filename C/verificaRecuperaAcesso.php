<?php
include_once '../M/conexao.php';
include_once '../M/desconexao.php';
include_once '../M/select.php';
include_once './funcoes.php';
include_once './configuracaoEmail.php';

$email = validaEmail($_POST['email']);//passa email para validação

//se email for inválido
if($email != $_POST['email']){
    header("Location: ../V/recuperaAcesso.php?msg1={$email}");//vá para index com o erro
}else{//senão
    $msg = configuracaoEmail($email);
    if($msg[0] == 'E'){
        header("Location: ../V/erroFatal.php?msg={$msg}");//vá para página de erro fatal
    }
    if($msg[0] == 'S'){
        header("Location: ../V/recuperaAcesso.php?msg={$msg}");//vá para página recuperaAcesso
    }
}