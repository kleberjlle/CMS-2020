<?php

session_start(); //inicia as sessões
if (!isset($_POST['pagina']) ||
        $_POST['pagina'] != "index.php") {
    include_once './sair.php';
    session_destroy();
    sairSistema();
} else {

    $_SESSION['protege'] = basename(__FILE__); //armazena o nome do arquivo atual

    include_once '../M/conexao.php'; //incorpora arquivo de conexão com BD
    include_once '../M/insert.php'; //incorpora arquivo insert
    include_once '../M/select.php'; //incorpora arquivo de select
    include_once './funcoes.php'; //incorpora arquivo responsável pelas funções
    include_once '../M/desconexao.php';
    include_once './configuracaoEmail.php';

    $configTabelasSistema = populaTabelas(); //verifica se o sistema está com as tabelas populadas
    $configEmailSistema = configuracaoEmail($_POST['email']); //verifica a configuação de email do sistema
    $codigo = $configEmailSistema[0] . $configEmailSistema[1] . $configEmailSistema[2]; //desmembra os 3 primeiros caracteres da msg
//Cofiguração provisória
    $configEmailSistema = true;
//Remover essa instrução após instalado sistema

    if ($configTabelasSistema === true &&
            $configEmailSistema === true) {//se as tabelas já estiverem populadas e email configurado
        $email = validaEmail($_POST['email']); //passa email para validação
        //se email estiver incorreto
        if ($email != $_POST['email']) {
            session_destroy();
            header("Location: ../V/index.php?msg1={$email}"); //vá para index com o erro
        } else {//senão
            $login = validaSenha($_POST['senha'], $email); //verifica se a senha coincide com a cadastrada
            //se o retorno da senha for idêntico a true
            if ($login === true) {
                header("Location: ../V/T/painel.php"); //permita acesso ao painel
            } else {//senão
                session_destroy();
                header("Location: ../V/index.php?msg2={$login}&email={$email}"); //vá para index com o erro
            }
        }
    } else {//senão
        if ($codigo == "S01") {//se tabela acabou de ser configurada
            session_destroy(); //destrua as sessões
            header("Location: ../V/alertas.php?codigo={$codigo}&msg={$configTabelasSistema}"); //encaminha para o arquivo alertas com mensagem
        } else {
            session_destroy(); //destrua as sessões
            header("Location: ../V/alertas.php?codigo={$codigo}&msg={$configEmailSistema}"); //encaminha para o arquivo alertas com mensagem
        }
    }
}