<?php
function conectaBancoDados() {
    //dados para conexão com banco de dados
    $servidor = 'localhost';
    $bancoDados = 'cms-2020';
    $usuario = 'root';
    $senha = '';
    $porta = '3306';

    $link = mysqli_connect($servidor, $usuario, $senha); //chama conexão com os dados do BD
    $selecionaBD = mysqli_select_db($link, $bancoDados); //executa a query de conexão

    if (!$link) {
        echo "Erro: Habilite uma conexão com o MySQL." . PHP_EOL . "<br />";
        echo "Código: " . mysqli_connect_errno() . PHP_EOL . "<br />";
        echo "Depuração: " . mysqli_connect_error() . PHP_EOL . "<br />";
        exit;
    } else {
        if (!$selecionaBD) {
            echo "Erro: Verifique o nome do Banco de Dados";
        }
    }
}
