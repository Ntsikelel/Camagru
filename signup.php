<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
    <link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>
</head>
<body> 
    <div id = "header">
     <a href = "http://localhost:8080/Camagru/index.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
    <div id = "signup">
        <form action= "signup.php" method = "post">
        <img src = "user.svg" width = "300" height = "300">
            <p id = "errmsg">
            <?php  
                foreach($_GET as $key => $val)
                {
                    echo "Error :".$val; 
                    if ($val === "Signup")
                    {
                        echo "<a href = 'http://localhost:8080/Camagru/resendmail.php'>Resend</a> ";
                    }
                }
            ?>
            </p>
            <input  type= "text" name="username" placeholder="Name" required/>
            <br/>
            <input  type= "email" name="email" placeholder="example@domain.com" required/>
            <br/>
            <input  type= "password" name="passwd" placeholder="******" required/>
            <br/>
            <input  type= "submit" name="submit" value = "Sign Up"/><br/>
            <a href="http://localhost:8080/Camagru/login.php">Do you already have an account ?</a><br/>
        </form>
    </div>
</body>
</html>
<?php 

    require_once ("config/database.php");
    require_once ("mail.php");
    require_once ("setfunc.php");
    require_once ("getfunc.php");
     //  echo "here";
       $DB_DSN = "mysql:host=localhost";
       $DB_USER = "root";
       $DB_PASSWORD = "123456";
    //echo $DB_DSN.$DB_PASSWORD.$DB_USER;
 function gen_tok($email)
{
    return (hash("whirlpool",$email,false));
}

if (isset($_POST['submit']))
{
   // print_r($_POST);
    if (isset($_POST['passwd']) || isset($_POST['email']) || isset($_POST['username']))
    {
        //echo "here1";
    $username = $_POST['username'];
    $val = 'whirlpool';
    $passwd = hash($val, $_POST['passwd'],false);
    $email = $_POST['email'];
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
        $pdo = new PDO($DB_DSN.';dbname='."camagru;", $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO users(id, username, passwd, email, is_act , is_pen, displayname) VALUES (?,?,?,?,?,?,?)";
        $stat = $pdo->query("SELECT * FROM users");
       
        while ($name = $stat->fetch())
        {
            if($name['email'] === $email)
           { 
                 set_displayname("Got it",$email);
                header('Location: http://localhost:8080/Camagru/signup.php?error=UserExists');
                exit();
            }
        }
        $pdo->prepare($query)->execute([null,$username,$passwd,$email,0,0,'user']);
        $query_t = "INSERT INTO tok(id, token) VALUES (?,?)";
        send_act($email,$tok = gen_tok($email)); 
        $pdo->prepare($query_t)->execute([get_id($email),$tok]);
        header('Location: http://localhost:8080/Camagru/login.php'); 
    }
    catch (PDOException $e)
    {
       // echo $e.getMessege();
        header('Location: http://localhost:8080/Camagru/signup.php?error=ERROR'); 
    }
}
else
    header('Location: http://localhost:8080/Camagru/signup.php?error=emptyfiled');
}
?>
