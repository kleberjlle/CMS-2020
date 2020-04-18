<?php
$email = filter_var($_POST['email'], FILTER_VALIDATOR_EMAIL);
$senha = $_POST['senha'];