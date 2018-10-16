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
            <input  type= "text" name="username" placeholder="Name" required/>
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

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    $email = $_POST['email'];
    print_r($_POST);
    echo "here";
    if (!isset($passwd) || !isset($email) || !isset($username))
    {
        header('Location: http://localhost:8080/Camagru/signup.php?error=emptyfiled');
       // exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header('Location: http://localhost:8080/Camagru/signup.php?error=email');
       
    }
    if (!preg_match("/^[a-zA-Z]*$/",$username))
    {
        header('Location: http://localhost:8080/Camagru/signup.php?error=username');
    }
        $pdo = new PDO('mysql:host=localhost;dbname=userrs;' , 'root','123456');
        $pdo.exec('INSERT INTO `userrs`(`id`, `username`, `password`, `email`) VALUES (2,$username,$passwd,$email)');
        $to = $email;
        $subject = "Account activation"  ;
         // mail($to,$subject,$msg,);
        header('Location: http://localhost:8080/Camagru/login.php?'); 
        echo "here";
}
?>
