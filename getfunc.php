<?php
<<<<<<< HEAD
    include_once ("config/database.php");

function is_exist($email,$user)
{
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
      //  $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
            {
               return ("UserExits");
            }
        }
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
}

function get_pass($pass, $email)
{
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
      //  $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
              return ($name['passwd']);
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
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
       // $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
                return ($name['username']);
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
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
       // $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $emailb)
           { 
            return ($name['email']);
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
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
            return ($name['is_act']);
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
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
      //  $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
            return ($name['is_pen']);
            }
        }
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
}
function get_displayname($displayname, $email)
{
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        //$pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
            { 
                return ($name['displayname']);
            }
        }
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
}
=======

function get_user($user)
{

}
function is_exist($user)
{ 
    try 
    {
     $pdo = new PDO($DB_DSN.';dbname='.$tablename, $DB_USER, $DB_PASSWORD);
      $stat = $pdo->query("SELECT * FROM userrs");
     while ($name = $stat->fetch())
    {
        if($name['email'] === $email)
       {
          echo $name['username'];
        header('Location: http://localhost:8080/Camagru/signup.php?error=UserExists');
     }
    }
}
    catch (PDOException $e)
    {

    }
}

>>>>>>> 30cfd86cdbdb840f4a1bca2fbc2e6d2d51a33ee7
?>