<?php
//verifica login
function validaLogin($senha,$email){
    conectaBancoDados();
    $query = "SELECT * "//selecione todos
            . "FROM usuarios "//da tabela usuarios
            . "WHERE email={$email} "//quando email, for igual ao email passado
            . "LIMIT 1";//limite a consulta a 1 registro
    $res = mysqli_query($link, $query);//executa a query anterior
    
    while ($row = mysql_fetch_array($res)) {
        echo "ID: {$row[0]} | NOME: {$row[1]} {$row[2]} | EMAIL: {$row[3]}";
    }
}