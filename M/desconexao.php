<?php
if( !isset($_SESSION['protege']) ||
    $_SESSION['protege'] != "verificaIndex.php" ||
    $_SESSION['protege'] != "verificaRecuperaAcesso.php"){
    include_once '../C/sair.php';
    session_destroy();
    sairSistema();
}
function desconectaBancoDados(){
    $link = conectaBancoDados();
    mysqli_close($link);
}