<?php
include_once './funcoes.php';

$email = validaEmail($_POST['email']);
print_r($email);

//$senha = $_POST['senha'];