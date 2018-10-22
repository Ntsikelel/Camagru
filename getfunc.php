<?php

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

?>