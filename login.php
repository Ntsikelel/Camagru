<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
</head>
<body>
    <div id = "signup">
        <form action= "login.php" method = "post">
        <p id = "errmsg">
            <?php  
                foreach($_GET as $key => $val)
                {
                    echo "Error :".$val; 
                }
            ?>
            </p>
            <input  type= "text" name="username" placeholder="Name" require/>
            <br/>
            <input  type= "password" name="passwd" placeholder="******" require/>
            <br/>
            <input  type= "submit" name="submit" value = "Login"/>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
    include_once ("config/database.php");
    echo $DB_DSN.$DB_PASSWORD.$DB_USER;
if (isset($_POST['submit']))
{
    if (isset($_POST['passwd']) || isset($_POST['username']))
    {
    $username = $_POST['username'];
    $val = 'whirlpool';
    $passwd = hash($val, $_POST['passwd'],false);
<<<<<<< HEAD
    $tablename = "camagru;";
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.$tablename, $DB_USER, $DB_PASSWORD);
        //$pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
            if($name['username'] === $username && $name['passwd'] === $passwd)
                 header('Location: http://localhost:8080/Camagru/index.php');
        }
        header('Location: http://localhost:8080/Camagru/login.php?error=UserNotFound'); 
=======
    $tablename = "userrs;";
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.$tablename, $DB_USER, $DB_PASSWORD);
        $pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM userrs");
        while ($name = $stat->fetch())
        {
            if($name['username'] === $username && $name['password'] === $passwd)
            {
                 header('Location: http://localhost:8080/Camagru/index.php');
            }
        }
>>>>>>> 30cfd86cdbdb840f4a1bca2fbc2e6d2d51a33ee7
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
        header('Location: http://localhost:8080/Camagru/login.php?error=ERROR'); 
    }
}
else
    header('Location: http://localhost:8080/Camagru/login.php?error=emptyfiled');
}
} 
?>
