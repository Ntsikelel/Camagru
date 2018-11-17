<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>changepassword</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
    <link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>
</head>
<body>
<div id = "header">
     <a href = "http://localhost:8080/Camagru/mainview.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
<div id = "signup">
        <form action= "changepassword.php" method = "post">
        <img src = "user.png" width = "300" height = "300">
            <p id = "errmsg"></p>
            <input  type= "password" name="passwd" placeholder="*******" required/>
            <br/>
            <input  type= "password" name="passwd_ver" placeholder="******" required/>
            <br/>
            <input  type= "submit" name="submit" value = "Reset"/>
        </form>
    </div>
    <div class="footer" style="    background:  rgba(9, 182, 144, 0.8);
    position: absolute;
    bottom: 0;
    left: 0;
    overflow: hidden;
    width: 100%;">
    <p style="float:right ;display:inline; color:white"> &copy nmetseem </p>
</div>
</body>
</html>
<?php
    require_once ("setfunc.php");
    

$DB_DSN = "mysql:host=localhost";
$DB_USER = "root";
$DB_PASSWORD = "123456";
if(isset($_POST['submit']))
{
    if(isset($_POST['passwd']) && isset($_POST['passwd_ver']))
    {
        $val = 'whirlpool';
        $passwd = hash($val, $_POST['passwd'],false);
        $passwd_ver = hash($val, $_POST['passwd_ver'],false);
     
        if($passwd == $passwd_ver)
        { 
    try
    {
    $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stat = $pdo->query("SELECT * FROM tok"); 
  
    while ($name = $stat->fetch())
    { 
     
        if($name['email'] === $_GET['email'] && $name['is_act'] == 1)
       { 
         
            set_pass($passwd, $email);
    
            header('Location: http://localhost:8080/Camagru/login.php');
            exit();
        }
    }
}
catch (PDOException $e)
{
    header('Location: http://localhost:8080/Camagru/signup.php?error= "Signup"');
}}
else
    { 
    header('Location: http://localhost:8080/Camagru/changepassword.php?error="WrongPass"');}
    }
}
?>