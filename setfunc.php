<?php
  require_once  ("config/database.php");

function set_pass($pass, $email)
{
    require_once  ("config/database.php");
    try
    {
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456";
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
               $query = "UPDATE users SET passwd = "."'$pass'"." WHERE id = ".$name['id'];
               echo $query;
             $pdo->exec($query);
            }
        }
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
}
function set_username($username, $email)
{
    require_once  ("config/database.php");
    try
    {
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456"; 
        echo $DB_DSN."Database1"; 
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
               $query = "UPDATE users SET username = "."'$username'"." WHERE id = ".$name['id'];
               echo $query;
             $pdo->exec($query);
            }
        }
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
}
function set_email($emailb,$emaila)
{
    require_once  ("config/database.php");
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $emailb)
           { 
               $query = "UPDATE users SET email = "."'$emaila'"." WHERE id = ".$name['id'];
               echo $query;
             $pdo->exec($query);
            }
        }
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
}
function set_is_act($num, $email)
{ 
    //require_once  ("/goinfre/nmetseem/MAMP/apache2/htdocs/Camagru/config/setup.php");
    try
    {
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456"; 
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
               $query = "UPDATE users SET is_act = ".$num." WHERE id = ".$name['id'];
               echo $query;
             $pdo->exec($query);
            }
        }
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
}
function set_is_pen($num, $email)
{
    require_once  ("config/database.php");
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
               $query = "UPDATE users SET is_pen = ".$num." WHERE id = ".$name['id'];
               echo $query;
             $pdo->exec($query);
            }
        }
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
}
function set_displayname($displayname, $email)
{ 
    require_once  ("config/database.php");
    try
    { // echo "here3";
       
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456"; 
       // echo $DB_DSN."Database1"; 
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
       
       // echo $email;
       // echo $displayname;
    
        while ($name = $stat->fetch())
        {
           // print_r($name);
           
            if($name['email'] === $email)
           {   
               
               $query = "UPDATE users SET displayname ="."'$displayname'"." WHERE id =".$name['id'];
               echo $query; 
               $pdo->exec($query); 
            }
        }
  

    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
}
function set_logout()
{
    session_start();
    session_destroy();
}
?>