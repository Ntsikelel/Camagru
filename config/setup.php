<?php
    include_once ("config/database.php");
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.$tablename, $DB_USER, $DB_PASSWORD);
       // $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "CREATE DATABASE Camagru";
        $pdo->prepare($query)->execute($query);
    }
    catch (PDOExeption $e)
    {
        echo $e.getMessege(); 
    }
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.$tablename, $DB_USER, $DB_PASSWORD);
      //  $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "CREATE DATABASE Camagru";
        $pdo->prepare($query)->execute($query);
    }
    catch (PDOExeption $e)
    {
        echo $e.getMessege(); 
    }
?>