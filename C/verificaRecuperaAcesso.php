<?php
include_once '../M/conexao.php';
include_once '../M/desconexao.php';
include_once '../M/select.php';
include_once './funcoes.php';

$email = validaEmail($_POST['email']);//passa email para validação

//se email for inválido
if($email != $_POST['email']){
    header("Location: ../V/recuperaAcesso.php?msg1={$email}");//vá para index com o erro
}else{
    
}