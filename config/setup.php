<?php
   require_once ("database.php");
    try
    {
        $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "CREATE DATABASE IF NOT EXISTS camagru";
        $pdo->exec($query);
    }
    catch (PDOException $e)
    {
        echo $e.getMessege(); 
    }
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $query = "CREATE TABLE IF NOT EXISTS users (
           id INT AUTO_INCREMENT PRIMARY KEY,
           username VARCHAR(30) NOT NULL ,
           passwd VARCHAR(128) NOT NULL,
           email VARCHAR(50) NOT NULL,
           is_act INT DEFAULT '0',
           is_pen INT DEFAULT '0',
           displayname VARCHAR(30) DEFAULT 'User'
         ) ";
        $pdo->exec($query);

    }
    catch (PDOException $e)
    {
        echo $e.getMessege(); 
    }
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $query = "CREATE TABLE IF NOT EXISTS pictures (
           id INT AUTO_INCREMENT PRIMARY KEY,
           comments VARCHAR(1024),
           picture_name VARCHAR(128),
           likes INT DEFAULT '0',
           is_pen INT DEFAULT '0'
         ) ";
        $pdo->exec($query);
    }
    catch (PDOException $e)
    {
        echo $e.getMessege(); 
    }
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $query = "CREATE TABLE IF NOT EXISTS Comments (
           id INT AUTO_INCREMENT PRIMARY KEY,
           username VARCHAR(30) NOT NULL ,
           passwd VARCHAR(128) NOT NULL,
           email VARCHAR(50) NOT NULL,
           is_act INT DEFAULT '0',
           is_pen INT DEFAULT '0',
           displayname VARCHAR(30) DEFAULT 'User'
         ) ";
        $pdo->exec($query);
    }
    catch (PDOException $e)
    {
        echo $e.getMessege(); 
    }
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $query = "CREATE TABLE IF NOT EXISTS TOK (
           id INT PRIMARY KEY,
           token VARCHAR(128) NOT NULL        
         ) ";
        $pdo->exec($query);
    }
    catch (PDOException $e)
    {
        echo $e.getMessege(); 
    }
?>