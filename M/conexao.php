<?php
//dados para conexão com banco de dados
$servidor = 'localhost';
$bancoDados = 'cms-2020';
$usuario = 'root';
$senha = '';
$porta = '3306';

$query = mysqli_connect($servidor,$usuario,$senha,$bancoDados,$porta);
mysqli_query($link, $query);