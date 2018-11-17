<?PHP
require_once('config/database.php');
function delete_img($u_id,$imgid)
{    global $DB_DSN,$DB_USER,$DB_PASSWORD;
    try
    {
        
        $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $pdo->prepare("DELETE FROM pictures WHERE pictures.u_id = ? AND pictures.id = ?")->execute([$u_id , $imgid]);
        $pdo->prepare("DELETE FROM comments WHERE  comments.id = ?")->execute([$imgid]);
       
    }
    catch(PDOException $e)
    {
            echo "Error";
    }
}

function delete_comment()
{

}
function delete_like()
{
    
}

?>