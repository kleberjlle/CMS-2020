<?php
if(isset($_POST['pagina']) != "alteraSenha.php"){
    include_once './sair.php';
    sairSistema(); 
}

include_once '../M/conexao.php';
include_once '../M/desconexao.php';
include_once '../M/select.php';
include_once '../M/update.php';
include_once '../M/insert.php';
include_once './funcoes.php';

if (isset($_POST['data']) &&
    isset($_POST['email']) &&
    isset($_POST['senha'])) {//se receber data, email e senha
    
    $msg = updateAlteraSenha($_POST['data'],$_POST['email'],$_POST['senha']);//atualiza a senha
    
    header("Location: ../V/index.php?msg={$msg}");//redireciona para index com mmsg de sucesso
} else {
    $ip = filter_var($_SERVER["REMOTE_ADDR"], FILTER_VALIDATE_IP); //armazena o endereço de IP de quem acessa a página atual
    $msg = alertas('E06') . $ip; //armazena a mensagem de erro em msg com o IP de quem acessa
    $codigo = "E06";
    header("Location: ../V/alertas.php?codigo={$codigo}&msg={$msg}");//encaminha para a URL com mensagem de erro
}