<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
    <link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>
</head>
<body>
<div id = "header">
     <a href = "http://localhost:8080/Camagru/mainview.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
    <div id = "signup">
        <form action= "login.php" method = "post" id = "form">
        <img src = "user.png" width = "300" height = "300" id = "usr_img"/>
        <p id = "errmsg">
            <?php  
          //  var_dump($_SESSION);
                foreach($_GET as $key => $val)
                {
                    echo "Error :".$val; 
                }
            ?>
            </p>
            <input  type= "email" name="username" placeholder="example@domain.com" require/>
            <br/>
            <input  type= "password" name="passwd" placeholder="******" require/>
            <br/>
            <input  type= "submit" name="submit" value = "Login"/><br/>
            <a href="http://localhost:8080/Camagru/signup.php">Need to sign up ?</a><br/>
            <a href="http://localhost:8080/Camagru/resetpass.php">Forgot your password ?</a>
        </form>
        <div class="div_pic" style = "background-image: url('logback.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; width:500px">
        <!-- <img src = "user.png" width = "300" height = "300"> -->
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
<?PHP
 if (!isset($_SESSION))
 {session_start();}

if (isset($_POST['submit']))
{
    require_once  ("config/database.php");
    
    global $DB_DSN,$DB_USER,$DB_PASSWORD;

if (isset($_POST['submit']))
{
    if (isset($_POST['passwd']) || isset($_POST['username']))
    {
    $username = $_POST['username'];
    $val = 'whirlpool';
    $passwd = hash($val, $_POST['passwd'],false);
    echo $username.$passwd;
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='."camagru;", $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
        while ($name = $stat->fetch())
        {
           print_r($name);
         
            if($name['email'] === $username && $name['passwd'] === $passwd && $name['is_act'] == 1)
            {
                 $_SESSION['email'] = $name['email'];
                 header('Location: http://localhost:8080/Camagru/index.php');
                 exit();
            }  
            if($name['email'] === $username && $name['passwd'] === $passwd && $name['is_act'] == 0)
            {
               
                 header('Location: http://localhost:8080/Camagru/login.php?error=ActivateAccount');
                 exit();
            }  
        }
        header('Location: http://localhost:8080/Camagru/login.php?error=UserNotFound'); 
    }
    catch (PDOException $e)
    {
       // echo $e.getMessege();
        header('Location: http://localhost:8080/Camagru/login.php?error=ERROR'); 
    }
}
else
    header('Location: http://localhost:8080/Camagru/login.php?error=emptyfiled');
}
} 
?>
