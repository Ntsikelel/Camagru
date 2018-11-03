<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
    <link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>
</head>
<body>
<div id = "header">
     <a href = "http://localhost:8080/Camagru/index.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
    <div id = "signup">
        <form action= "reset.php.php" method = "post">
        <img src = "user.svg" width = "300" height = "300"/>
        <p id = "errmsg">
            <?php  
                foreach($_GET as $key => $val)
                {
                    echo "Error :".$val; 
                }
            ?>
            </p>
            <input  type= "email" name="email" placeholder="example@domain.com" require/>
            <br/>
            <input  type= "submit" name="submit" value = "Login"/><br/>
            <a href="http://localhost:8080/Camagru/signup.php">Need to sign up ?</a><br/>
            <a href="http://localhost:8080/Camagru/signup.php">Forgot your password ?</a>
        </form>
    </div>
</body>
</html>
<?PHP
require_once("mail.php");
if (isset($_POST['submit']))
{
}
?>
