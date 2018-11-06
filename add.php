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
     $query = "INSERT INTO pictures(id ,u_id, path, picture_name, likes, is_pen) VALUES (null,".get_id($email).",'$data','image.png',0,0)";
         $pdo->exec($query);

    }
catch (PDOException $e)
{
   // echo $e.getMessege();
 //   header('Location: http://localhost:8080/Camagru/signup.php?error= "Signup"');
}
}
function add_comment($mes, $email,$imgid)
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
       
        $query = "INSERT INTO comments(id,u_id, comment) VALUES (".$imgid.",".get_id($email).",'$mes')";
        comment_like_mail($email);
       // get_email_by_id(get_id($email));
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
 
function add_like($uid,$id)
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
       
        $query = "UPDATE pictures SET likes= likes + 1 WHERE u_id=".$uid." AND id=".$id;
        //header('Location: http://localhost:8080/Camagru/mainview.php?'.$query);
       // exit();
       comment_like_mail(get_email_by_id($uid));
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