<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
    <link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>
</head>
<body>
<div id = "header">
     <a href = "http://localhost:8080/Camagru/mainview.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
<div id = "signup">
        <form action= "editprofile.php" method = "post">
             <img src = "user.png" width = "300" height = "300">
            <p id = "errmsg">
            <?php  
                foreach($_GET as $key => $val)
                {
                    echo "Error :".$val; 
                }
            ?>
            </p>
            <input  type= "text" name="username" placeholder="Name" required/>
            <br/>
            <input  type= "email" name="email" placeholder="example@domain.com" required/>
            <br/>
            <input  type= "password" name="passwd" placeholder="P******" required/>
            <br/>
            <input  type= "text" name="displayname" placeholder="Display Name" required/>
            <br/>Recieve Email <input type= "checkbox" name = "RecieveEmail" checked>
            <input  type= "submit" name="submit" value = "Edit Profile"/>
        </form>
        <div class="div_pic" style = "background-image: url('logback.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; width:500px">
        </div>
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
    require_once  ("setfunc.php");
    require_once ("verfunc.php");
    if (!isset($_SESSION))
 {session_start();}

 if (isset($_POST['submit']))
 {
    if (isset($_POST['displayname']) && isset($_SESSION['email']) )
    {
        set_displayname($_POST['displayname'],$_SESSION['email']);
        header('Location:  http://localhost:8080/Camagru/mainview.php');
    }
    if (isset($_POST['username']) && isset($_SESSION['email']))
    {
        set_username($_POST['username'],$_SESSION['email']);
        header('Location:  http://localhost:8080/Camagru/mainview.php');
    }
    if (isset($_POST['passwd']) && isset($_SESSION['email']))
    {
        if (($e = ver_pass($_POST['passwd'])) !== '1')
        {
            header('Location: http://localhost:8080/Camagru/editprofile.php?error='.$e); 
             exit();
        }
        set_pass(hash('whirlpool',$_POST['passwd'],false),$_SESSION['email']);
        header('Location:  http://localhost:8080/Camagru/mainview.php');
    }
    if (isset($_SESSION['email']) && isset($_POST['email']))
    {
        set_email($_SESSION['email'],$new_mail = $_POST['email']);
        $_SESSION['email'] = $new_mail;
        header('Location:  http://localhost:8080/Camagru/mainview.php');
    }
    if (isset($_SESSION['email']) && isset($_POST['email']) && !isset($_POST['RecieveEmail']))
    {
        set_is_pen(0,$_POST['email']);
        header('Location:  http://localhost:8080/Camagru/mainview.php');
    }
    if (isset($_SESSION['email']) && isset($_POST['email']) && isset($_POST['RecieveEmail']))
    {
        set_is_pen(1,$_POST['email']);
        header('Location:  http://localhost:8080/Camagru/mainview.php');
    }
}
?>