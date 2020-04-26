<?php
include_once '../M/conexao.php';
include_once '../M/desconexao.php';
include_once '../M/select.php';
include_once './funcoes.php';

if (isset($_POST['data']) && isset($_POST['email']) && isset($_POST['senha'])) {//se receber todas informações
    $data = $_POST['data'];//recebe a data e hora no padrão do BD
    $email = $_POST['email'];//recebe email
    $senha = $_POST['senha'];//recebe nova senha
    
    insertAleteraSenha($data,$email,$senha);
} else {
    $ip = filter_var($_SERVER["REMOTE_ADDR"], FILTER_VALIDATE_IP); //armazena o endereço de IP de quem acessa a página atual
    $msg = alertas('E06') . $ip; //armazena a mensagem de erro em msg com o IP de quem acessa
    header("Location: ../V/erroFatal.php?msg={$msg}");//encaminha para a URL com mensagem de erro
}