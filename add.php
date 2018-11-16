<?PHP
require_once ("config/database.php");
require_once ("getfunc.php");
require_once ("mail.php");
function add_img($data, $email)
{
    global $DB_DSN,$DB_USER,$DB_PASSWORD; 
    try
    {

     $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $st = $pdo->prepare("INSERT INTO pictures(id ,u_id, path, picture_name, likes, is_pen) VALUES (null,:u_id,:path,'image.png',0,0)");
     $st->execute(['u_id'=>get_id($email),'path,'=>$data]);

    }
catch (PDOException $e)
{
   // echo $e.getMessege();
 //   header('Location: http://localhost:8080/Camagru/signup.php?error= "Signup"');
}
}
function add_comment($mes, $email,$imgid)
{

    global $DB_DSN,$DB_USER,$DB_PASSWORD;  
try
{
$pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $stat = $pdo->query("SELECT * FROM users");
//while ($name = $stat->fetch())
//  {
   // if($name['email'] === )
  // { 
       
    $st = $pdo->prepare("INSERT INTO comments(id,u_id, comment) VALUES (:id,:u_id,:comment)");
        comment_like_mail($email);
       // get_email_by_id(get_id($email));
       $st->execute(['id'=>$imgid,'u_id'=>get_id($email),'comment'=>$mes]);
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
{  global $DB_DSN,$DB_USER,$DB_PASSWORD; 
try
{
$pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $stat = $pdo->query("SELECT * FROM users");
//while ($name = $stat->fetch())
//  {
   // if($name['email'] === )
  // { 
       
    $st = $pdo->prepare("UPDATE pictures SET likes= likes + 1 WHERE u_id=:u_id AND id=:id");
        //header('Location: http://localhost:8080/Camagru/mainview.php?'.$query);
       // exit();
       comment_like_mail(get_email_by_id($uid));
       $st->execute(['u_id'=>$uid,'id'=>$id]);
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