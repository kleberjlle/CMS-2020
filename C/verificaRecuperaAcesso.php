<?php

session_start(); //inicia as sessões
if (!isset($_POST['pagina']) ||
        $_POST['pagina'] != "recuperaAcesso.php") {
    include_once './sair.php';
    session_destroy();
    sairSistema();
} else {

    $_SESSION['protege'] = basename(__FILE__); //armazena o nome do arquivo atual

    include_once '../M/conexao.php';
    include_once '../M/desconexao.php';
    include_once '../M/select.php';
    include_once './funcoes.php';
    include_once './configuracaoEmail.php';

    $email = validaEmail($_POST['email']);

//se email for inválido
    if ($email != $_POST['email']) {
        header("Location: ../V/recuperaAcesso.php?msg1={$email}"); //vá para index com o erro
    } else {//senão
        $msg = configuracaoEmail($email);
        if ($msg[0] == 'E') {
            $codigo = $msg[0] . $msg[1] . $msg[2];
            header("Location: ../V/alertas.php?codigo={$codigo}&msg={$msg}"); //vá para página de erro fatal
        }
        if ($msg[0] == 'S') {
            $codigo = $msg[0] . $msg[1] . $msg[2];
            header("Location: ../V/alertas.php?codigo={$codigo}&msg={$msg}"); //vá para página recuperaAcesso
        }
    }
}