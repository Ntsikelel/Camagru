<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
</head>
<body>
    <div id = "signup">
        <form action= "signup.php" method = "post">
            <p id = "errmsg">
            <?php  
                foreach($_GET as $key => $val)
                {
                    echo "Error :".$val; 
                }
            ?>
            </p>
            <input  type= "text" name="username" placeholder="Name" />
            <br/>
            <input  type= "email" name="email" placeholder="example@domain.com" required/>
            <br/>
            <input  type= "password" name="passwd" placeholder="******" required/>
            <br/>
            <input  type= "submit" name="submit" value = "Sign Up"/>
        </form>
    </div>
</body>
</html>
<?php
    include_once ("config/database.php");
    include_once ("mail.php");
    include_once ("setfunc.php");
    echo $DB_DSN.$DB_PASSWORD.$DB_USER;
if (isset($_POST['submit']))
{
    print_r($_POST);
    if (isset($_POST['passwd']) || isset($_POST['email']) || isset($_POST['username']))
    {
        echo "here1";
    $username = $_POST['username'];
    $val = 'whirlpool';
    $passwd = hash($val, $_POST['passwd'],false);
    $email = $_POST['email'];
    $tablename = "camagru;";
    if (!isset($passwd) || !isset($email) || !isset($username))
    {
        header('Location: http://localhost:8080/Camagru/signup.php?error=emptyfiled');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header('Location: http://localhost:8080/Camagru/signup.php?error=email');
    }
    if (!preg_match("/^[a-zA-Z]*$/",$username))
    {
        header('Location: http://localhost:8080/Camagru/signup.php?error=username');
    }
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.$tablename, $DB_USER, $DB_PASSWORD);
        //$pod->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO users(id, username, passwd, email, is_act , is_pen, displayname) VALUES (?,?,?,?,?,?,?)";
        $stat = $pdo->query("SELECT * FROM users");
       
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { echo "here2";
            set_displayname("Got it",$email);
                header('Location: http://localhost:8080/Camagru/signup.php?error=UserExists');
                exit();
            }
        }
        $pdo->prepare($query)->execute([null,$username,$passwd,$email,0,0,'user']);
        send_act($email);
        header('Location: http://localhost:8080/Camagru/login.php'); 
    }
    catch (PDOException $e)
    {
        echo $e.getMessege();
        header('Location: http://localhost:8080/Camagru/signup.php?error=ERROR'); 
    }
}
else
    header('Location: http://localhost:8080/Camagru/signup.php?error=emptyfiled');
}
?>
