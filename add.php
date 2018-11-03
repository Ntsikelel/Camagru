<?PHP
include_once('config/database.php');

function add_img($data)
{
    try
    {
        $pdo = new PDO($DB_DSN.';dbname='.'camagru', $DB_USER, $DB_PASSWORD);
        $pdo->setAtrribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO pictures(id, comments, picture_name, likes, is_pen) VALUES (1 /*get_user_id*/,$data,'image1.png',0,0)";
        $pdo->prepare($query)->exec($query);
    }
    catch(PDOException $e)
    {

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