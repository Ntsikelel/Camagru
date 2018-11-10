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
     <a href = "http://localhost:8080/Camagru/mainview.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
    <div id = "signup">
        <form action= "resetpass.php" method = "post">
        <img src = "user.png" width = "300" height = "300"/>
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
            <a href="http://localhost:8080/Camagru/login.php">Login ?</a>
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
require_once ("config/database.php");
require_once ("mail.php");
require_once ("getfunc.php");
require_once ("tok.php");
require_once ("setfunc.php");
if (isset($_POST['submit']))
{
    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
        try
        {
           
            $pdo = new PDO($DB_DSN.';dbname='."camagru;", $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");
            while ($name = $stat->fetch())
            {
                if($name['email'] === $email)
                {   
                    $query_t = "INSERT INTO tok(id, token) VALUES (?,?)";
                    res_pass($email,$tok = gen_tok($email));
                    $pdo->prepare($query_t)->execute([get_id($email),$tok]); 
                    set_is_act(0,$email);
                    header('Location: http://localhost:8080/Camagru/login.php'); 
                    exit();
                }
            } 
            header('Location: http://localhost:8080/Camagru/ca.php?error=NotFound'); 
        }
        catch (PDOException $e)
        {
           // echo $e.getMessege();
            header('Location: http://localhost:8080/Camagru/resetpass.php?error=emailsent'); 
        }
    }
}
?>
