<?php
function desconectaBancoDados(){
    $link = conectaBancoDados();
    mysqli_close($link);
}