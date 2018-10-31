<?php
require_once  ("config/setup.php");
session_start();
if(isset($_SESSION['email']))
    header('Location: http://localhost:8080/Camagru/view.php');
else
    header('Location: http://localhost:8080/Camagru/login.php');
?>