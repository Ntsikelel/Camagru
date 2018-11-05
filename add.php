<?PHP
require_once ("config/database.php");
require_once ("getfunc.php");
require_once ("mail.php");
function add_img($data, $email)
{
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456";   
    try
    {

     $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $query = "INSERT INTO pictures(id, path, picture_name, likes, is_pen) VALUES (".get_id($email).",'$data','image.png',0,0)";
         $pdo->exec($query);

    }
catch (PDOException $e)
{
   // echo $e.getMessege();
 //   header('Location: http://localhost:8080/Camagru/signup.php?error= "Signup"');
}
}
function add_comment($mes)
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
       
        $query = "INSERT INTO comments(id, comment) VALUES (".get_id($email).",'$mes')";
        $pdo->exec($query);
       // comment_like_mail(get_email($email);
   // }
// }
}
catch (PDOException $e)
{
// echo $e.getMessege();
//   header('Location: http://localhost:8080/Camagru/signup.php?error= "Signup"');
}
}
 
function add_like($id)
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
       
        $query = "UPDATE pictures SET likes= likes + 1 WHERE id=".$id;
        $pdo->exec($query);
   // }
// }
}
catch (PDOException $e)
{
// echo $e.getMessege();
//   header('Location: http://localhost:8080/Camagru/signup.php?error= "Signup"');
}
}
?>