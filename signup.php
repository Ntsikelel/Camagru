<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
    <link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body> 
    <div id = "header">
     <a href = "http://localhost:8080/Camagru/mainview.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
    <div id = "signup">
        <form action= "signup.php" method = "post" style= "background:white;">
        <img src = "user.png" width = "300" height = "300">
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
            <div class="g-recaptcha" data-sitekey="6LcNCHsUAAAAAKG1dP_jN23ajc2AwEJH0aFvLFOP"></div>
            <a href="http://localhost:8080/Camagru/login.php">Do you already have an account ?</a><br/>
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
<?php 

    require_once ("config/database.php");
    require_once ("mail.php");
    require_once ("setfunc.php");
    require_once ("getfunc.php");
    require_once ("verfunc.php");
 
     global $DB_DSN,$DB_USER,$DB_PASSWORD;

 function gen_tok($email)
{
    return (hash("whirlpool",$email,false));
}

if (isset($_POST['submit']) && isset($_POST['g-recaptcha-response']))
{   
    var_dump($_POST);
    $sec = '6LcNCHsUAAAAAMVANx28GTppwiEPSa4oVgvu1ovm';
    $res = $_POST['g-recaptcha-response'];
    $r_ip = $_SERVER['REMOTE_ADDR'];
    $file = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$sec&response=$res&remoteip=$r_ip");
    $resp = json_decode($file,TRUE);
    if (isset($_POST['passwd']) && isset($_POST['email']) && isset($_POST['username']) && $resp['success'] == TRUE)
    {
    $username = $_POST['username'];
    $val = 'whirlpool'; 
    if (($e = ver_pass($_POST['passwd'])) !== '1')
    {
        header('Location: http://localhost:8080/Camagru/signup.php?error='.$e); 
         exit();
    }
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
                header('Location: http://localhost:8080/Camagru/signup.php?error=UserExists');
                exit();
            }
        }
        $pdo->prepare($query)->execute([null,$username,$passwd,$email,0,1,'user']);
        $query_t = "INSERT INTO tok(id, token) VALUES (?,?)";
        send_act($email,$tok = gen_tok($email)); 
        $pdo->prepare($query_t)->execute([get_id($email),$tok]);
        header('Location: http://localhost:8080/Camagru/login.php'); 
    }
    catch (PDOException $e)
    {
        header('Location: http://localhost:8080/Camagru/signup.php?error=ERROR'); 
    }
}
else
    header('Location: http://localhost:8080/Camagru/signup.php?error=emptyfiled');
}
?>
