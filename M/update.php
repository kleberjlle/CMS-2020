<?php
//atualiza senha
function updateAlteraSenha($data,$email,$senha){
    //verifica se existe o arquivo de log
    $file = "http://127.0.0.1/CMS-2020/C/funcoes.php";
    
    if(file_exists($arquivo)){
        parse_url($arquivo);
        //include_once '../LOG/alteraSenha.txt';
        echo "arquivo {$arquivo} existe";
    }else{
        echo "arquivo {$arquivo} não existe";
    }
    
    //$query = "UPDATE usuarios SET senha='$senha' WHERE email='$email'";
    //mysqli_query($link, $query);
}
