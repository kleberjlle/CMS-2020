<?php
include_once '../M/conexao.php';//incorpora arquivo de conexão com BD
include_once '../M/select.php';//incorpora arquivo de select
include_once './funcoes.php';//incorpora arquivo responsável pelas funções
include_once '../M/desconexao.php';

$email = validaEmail($_POST['email']);//passa email para validação
if($email != $_POST['email']){
    echo $email;
}else{
    echo $senha = validaSenha($_POST['senha'],$email);
}


