<?php
session_start();
//var_dump($_SESSION);
session_destroy();
//var_dump($_SESSION);
header('Location: http://localhost:8080/Camagru/index.php');
?>