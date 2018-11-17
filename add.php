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
     $st->execute(['u_id'=>get_id($email),'path'=>$data]);
    }
    catch (PDOException $e)
    {
        echo "ERROR";
    }
}
function add_comment($mes, $email,$imgid,$email_own)
{

    global $DB_DSN,$DB_USER,$DB_PASSWORD;  
    try
    {
    $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $st = $pdo->prepare("INSERT INTO comments(id,u_id, comment) VALUES (:id,:u_id,:comment)");
        if (get_is_pen($email_own) == 1)
        {
            comment_like_mail($email_own);
        }
        $st->execute(['id'=>$imgid,'u_id'=>get_id($email),'comment'=>$mes]);
    }
    catch (PDOException $e)
    {
    echo "ERROR";
    }
}
 
function add_like($email,$id)
{  global $DB_DSN,$DB_USER,$DB_PASSWORD; 
    try
    {
    $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $st = $pdo->prepare("UPDATE pictures SET likes= likes + 1 WHERE id=:id");
    
        if (get_is_pen($email) == 1)
        {
        
            comment_like_mail($email);
            }
        $st->execute(['id'=>$id]);

    }
    catch (PDOException $e)
    {
     echo "ERROR";
    }
}
?>