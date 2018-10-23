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
            <input  type= "submit" name="submit" value = "Login"/><br/>
            <a href="http://localhost:8080/Camagru/signup.php">Need to sign up</a><br/>
            <a href="http://localhost:8080/Camagru/signup.php">Forgot your password</a>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
    require_once  ("config/database.php");
    echo $DB_DSN.$DB_PASSWORD.$DB_USER;
if (isset($_POST['submit']))
{
    if (isset($_POST['passwd']) || isset($_POST['username']))
    {
    $username = $_POST['username'];
    $val = 'whirlpool';
    $passwd = hash($val, $_POST['passwd'],false);
    $tablename = "camagru;";
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.$tablename, $DB_USER, $DB_PASSWORD);
        //$pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
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
        echo $e.getMessege();
        header('Location: http://localhost:8080/Camagru/login.php?error=ERROR'); 
    }
}
else
    header('Location: http://localhost:8080/Camagru/login.php?error=emptyfiled');
}
} 
?>
