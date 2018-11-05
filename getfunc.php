<?php
    require_once  ("config/database.php");
    $DB_DSN = "mysql:host=localhost";
    $DB_USER = "root";
    $DB_PASSWORD = "123456";
function is_exist($email,$user)
{
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
function get_id($email)
{
    $DB_DSN = "mysql:host=localhost";
    $DB_USER = "root";
    $DB_PASSWORD = "123456";
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
            {
               return ($name['id']);
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
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email && $pass === $name['passwd'])
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
function get_username($username, $email)
{
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
function get_email($emailb,$emaila)
{
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
function get_is_act($num, $email)
{ 
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
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
function get_is_pen($num, $email)
{
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
    function get_pictures()  
    {
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456";
        try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM pictures");
        if ($name = $stat->fetch())
        {
                return ($name['path']);
              //  exit();
        }
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
 }
    function get_pic_id()
    {
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM pictures");
            while ($name = $stat->fetch())
            {
                    echo ($name['id']);
            }
        }
        catch (PDOException $e)
        {
            echo $e.getMessege();
        }
    }
   function get_pic_num()
   {
    try
    {
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456";
        $count = 0;
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM pictures");
        while ($name = $stat->fetch())
        {
                $count++;
        }
        return ($count);
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
    }
   }
?>