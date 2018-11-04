<?PHP
require_once ("config/database.php");
require_once ("getfunc.php");
function add_img($data)
{
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456";   
    try
{
    $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // $stat = $pdo->query("SELECT * FROM users");
    //while ($name = $stat->fetch())
  //  {
       // if($name['email'] === )
      // { 
           
            $query = "INSERT INTO pictures(id, comments, picture_name, likes, is_pen) VALUES (?,?,?,?,?)";
            $pdo->prepare($query)->execute([null,$data,'img1.png',0,0]);
       // }
   // }
}
catch (PDOException $e)
{
   // echo $e.getMessege();
 //   header('Location: http://localhost:8080/Camagru/signup.php?error= "Signup"');
}
}
function add_comment()
{

    try
    {

    }
    catch(PDOException $e)
    {
        
    }
}
 
function add_like()
{
    try
    {
        // $pdo = new PDO($DB_DSN.';dbname='.'camagru', $DB_USER, $DB_PASSWORD);
        // $pdo->setAtrribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $query = "INSERT INTO pictures(id, comments, picture_name, likes, is_pen) VALUES (1 /*get_user_id*/,NULL,image1.png,0,0)";
        // $pdo->prepare($query)->exec($query);
    }
    catch(PDOException $e)
    {

    }
}
?>