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
     <a href = "http://localhost:8080/Camagru/index.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
    <div id = "signup">
        <form action= "login.php" method = "post">
        <img src = "user.svg" width = "300" height = "300"/>
        <p id = "errmsg">
            <?php  
                foreach($_GET as $key => $val)
                {
                    echo "Error :".$val; 
                }
            ?>
            </p>
            <input  type= "text" name="username" placeholder="Name" require/>
            <br/>
            <input  type= "password" name="passwd" placeholder="******" require/>
            <br/>
            <input  type= "submit" name="submit" value = "Login"/><br/>
            <a href="http://localhost:8080/Camagru/signup.php">Need to sign up ?</a><br/>
            <a href="http://localhost:8080/Camagru/signup.php">Forgot your password ?</a>
        </form>
    </div>
</body>
</html>
<?PHP

if (isset($_POST['submit']))
{
    require_once  ("config/database.php");
    
    $DB_DSN = "mysql:host=localhost";
    $DB_USER = "root";
    $DB_PASSWORD = "123456";
    echo $DB_DSN.$DB_PASSWORD.$DB_USER;
    echo "Here";
if (isset($_POST['submit']))
{
    if (isset($_POST['passwd']) || isset($_POST['username']))
    {
    $username = $_POST['username'];
    $val = 'whirlpool';
    $passwd = hash($val, $_POST['passwd'],false);
    $tablename = "camagru;";
    echo $username.$passwd;
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.$tablename, $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM users");
      
       
        while ($name = $stat->fetch())
        {
           print_r($name);
         
            if($name['username'] === $username && $name['passwd'] === $passwd)
            {
                 $_SESSION['email'] = $name['email'];
                 header('Location: http://localhost:8080/Camagru/index.php');
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
