<?php
session_start();
$_SESSION = array();
header("location: ../V/index.php");
session_destroy();

