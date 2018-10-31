<?php
var_dump($_POST);
require_once  ("config/database.php");
    
$DB_DSN = "mysql:host=localhost";
$DB_USER = "root";
$DB_PASSWORD = "123456";
//echo $DB_DSN.$DB_PASSWORD.$DB_USER;
//echo "Here";

        $pdo = new PDO($DB_DSN.';dbname=camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
      
       
        while ($name = $stat->fetch())
        {
           print_r($name);
          // exit();
            
                echo  $name['email'];
                
                // header('Location: http://localhost:8080/Camagru/index.php');
           
        }
 

/* if (isset($_POST['submit']))
{
    require_once  ("config/database.php");
    
    $DB_DSN = "mysql:host=localhost";
    $DB_USER = "root";
    $DB_PASSWORD = "123456";
    echo $DB_DSN.$DB_PASSWORD.$DB_USER;
    echo "Here";
if (isset($_POST['submit']))
{
    if (isset($_POST['passwd']) || isset($_POST['username']))
    {
    $username = $_POST['username'];
    $val = 'whirlpool';
    $passwd = hash($val, $_POST['passwd'],false);
    $tablename = "camagru;";
    echo $username.$passwd;
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.$tablename, $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
      
       
        while ($name = $stat->fetch())
        {
           print_r($name);
           exit();
            if($name['username'] === $username && $name['passwd'] === $passwd)
            {
                 $_SESSION['email'] = $name['email'];
                
                 header('Location: http://localhost:8080/Camagru/index.php');
            }
        }
        header('Location: http://localhost:8080/Camagru/login.php?error=UserNotFound'); 
    }
    catch (PDOException $e)
    {
       // echo $e.getMessege();
        header('Location: http://localhost:8080/Camagru/login.php?error=ERROR'); 
    }
}
else
    header('Location: http://localhost:8080/Camagru/login.php?error=emptyfiled');
}
}  */
?>
