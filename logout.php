<?php
session_start();

session_destroy();
unset($_SESSION['email']);

header('Location: http://localhost:8080/Camagru/index.php');
?>