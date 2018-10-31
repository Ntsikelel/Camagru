<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id = "signup">
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
            <br/>
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