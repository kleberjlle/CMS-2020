<?php
include_once '../M/conexao.php';//incorpora arquivo de conexão com BD
include_once '../M/select.php';//incorpora arquivo de select
include_once './funcoes.php';//incorpora arquivo responsável pelas funções
include_once '../M/desconexao.php';


$email = validaEmail($_POST['email']);//passa email para validação
echo $senha = validaSenha($_POST['senha'],$email);
//$login = validaLogin($_POST['senha'],$email);//passa email e senha para validação de acesso
//var_dump($login);
//echo $email;
//echo $senha;

