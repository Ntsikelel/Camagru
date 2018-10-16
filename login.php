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
            <input  type= "text" name="username" placeholder="Name" require/>
            <br/>
            <input  type= "email" name="email" placeholder="example@domain.com" require/>
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
    
}
?>
