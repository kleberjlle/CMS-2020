<?php
//verifica login
function validaLogin($senha,$email){
    $query = "SELECT * FROM usuarios WHERE email={$email}";
    mysqli_query($link, $query);
}
