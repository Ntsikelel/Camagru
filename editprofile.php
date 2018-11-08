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
     <a href = "http://localhost:8080/Camagru/index.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
<div id = "signup">
<img src = "user.svg" width = "300" height = "300">
        <form action= "editprofile.php" method = "post">
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
            <input  type= "email" name="email" placeholder="example@domain.com" require/>
            <br/>
            <input  type= "text" name="displayname" placeholder="Display Name" />
            <br/>Recieve Email <input type= "checkbox" name = "Recieve Email" checked>
            <input  type= "submit" name="submit" value = "Edit Profile"/>
          
        </form>
    </div>
</body>
</html>
<?php
    require_once  ("setfunc.php");
    if (isset($_POST['displayname'])   && isset($_POST['email']) )
    {
        set_displayname($_POST['displayname'],$_POST['email']);
    }
    if (isset($_POST['displayname']) && isset($_POST['email']))
    {
        set_username($_POST['username'],$_POST['email']);
    }
?>