<?php
include_once './funcoes.php';

$email = validaEmail($_POST['email']);
$senha = validaSenha($_POST['senha']);