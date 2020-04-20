<?php
include_once '../M/conexao.php';//incorpora arquivo de conexão com BD
include_once '../M/select.php';
include_once './funcoes.php';//incorpora arquivo responsável pelas funções

$email = validaEmail($_POST['email']);//passa email para validação
$senha = validaSenha($_POST['senha']);//passa senha para validação
validaLogin($senha,$email);//passa email e senha para validação de acesso