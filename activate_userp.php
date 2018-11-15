<?php

require_once ("setfunc.php");

$email = $_GET['email'];
$tok = $_GET['tok'];
$DB_DSN = "mysql:host=localhost";
$DB_USER = "root";
$DB_PASSWORD = "123456";
try
{
    $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stat = $pdo->query("SELECT * FROM tok");
    while ($name = $stat->fetch())
    {
        if($name['token'] === $tok)
       { 
        $tok_t = $name['token'];
        $query = "DELETE FROM tok WHERE token ="."'$tok_t'";
        set_is_act(1,$email);
      //  set_pass($passwd, $email);
        $pdo->exec($query);
            header('Location: http://localhost:8080/Camagru/login.php?email='.$email);
        }
    }
}
catch (PDOException $e)
{
    //echo $e.getMessege();
    header('Location: http://localhost:8080/Camagru/signup.php?error= "Signup"');
}

?>