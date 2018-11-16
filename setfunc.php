<?php
  require_once  ("config/database.php");

function set_pass($pass, $email)
{
    global $DB_DSN,$DB_USER,$DB_PASSWORD;
    try
    {
       
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
            $st = $pdo->prepare("UPDATE users SET passwd =:passwd WHERE id = :id");
            $st->execute(['passwd'=>$pass,'id'=>$name['id']]);
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
    global $DB_DSN,$DB_USER,$DB_PASSWORD;
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
            $st = $pdo->prepare("UPDATE users SET username =:username WHERE id = :id");
            $st->execute(['username'=>$username,'id'=>$name['id']]);
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
    global $DB_DSN,$DB_USER,$DB_PASSWORD;
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $emailb)
           { 
            $st = $pdo->prepare("UPDATE users SET email =:email WHERE id = :id");
            $st->execute(['email'=>$emaila,'id'=>$name['id']]);
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
    global $DB_DSN,$DB_USER,$DB_PASSWORD;
    try
    {
     
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
            $st = $pdo->prepare("UPDATE users SET is_act = :is_act WHERE id = :id");
            $st->execute(['is_act'=>$num,'id'=>$name['id']]);
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
    global $DB_DSN,$DB_USER,$DB_PASSWORD;
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
            $st = $pdo->prepare("UPDATE users SET is_pen = :is_pen WHERE id = :id");
               $st->execute(['is_pen'=>$is_pen,'id'=>$name['id']]);
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
    global $DB_DSN,$DB_USER,$DB_PASSWORD;
    try
    { 
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
       
           
            if($name['email'] === $email)
           {   
               
            $st = $pdo->prepare("UPDATE users SET displayname =:displayname WHERE id =:id");
               $st->execute(['displayname'=>$displayname,'id'=>$name['id']]);
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