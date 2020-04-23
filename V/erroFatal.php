<?php
if(isset($_GET['msg'])){
    echo "Sorry! Favor contatar o suporte nessa porra! e informe o seguinte erro:<br />"
    . "{$_GET['msg']}";
}