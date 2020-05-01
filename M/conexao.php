<?php
if(isset($_SESSION['protege']) != "verificaIndex.php"){
    sairSistema();
}
function conectaBancoDados() {
    //dados para conexão com banco de dados
    $servidor = 'localhost';
    $bancoDados = 'cms-2020';
    $usuario = 'root';
    $senha = '';
    //$porta = '3306';

    $link = mysqli_connect($servidor, $usuario, $senha, $bancoDados); //chama conexão com os dados do BD

    if (!$link) {
        echo "Erro: Habilite uma conexão com o MySQL." . PHP_EOL . "<br />";
        echo "Código: " . mysqli_connect_errno() . PHP_EOL . "<br />";
        echo "Depuração: " . mysqli_connect_error() . PHP_EOL . "<br />";
        exit;
    }
    return $link;
}