<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload Picture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>
   
</head>
<body>
<div id= "cont">
<div id = "header">
        <a href = "http://localhost:8080/Camagru/mainview.php">  <img src = "camagrulogo.png" width = "100" height = "100" id = "logo"></a>
        <!-- <p style="background:white"> Hello <?php //session_start(); echo $_SESSION['email']?></p>   -->
        <div id="nav">   
            <a href="editprofile.php"id = "btn">Edit Profile</a>   
            <a href="logout.php" >logout</a>  
        </div> 
    </div> 
   
    <canvas id= "canv" width="600" height = "600" style= "background : transparent;"></canvas>
    <table>
        <tr id="smp_img">
            <td id= "smp_img_block"><img src="smp1.png" width="100" height = "100" onclick="view_img_1(1)" id = "smp1"></td>
            <td id= "smp_img_block"><img src="smp2.png" width="100" height = "100" onclick="view_img_1(2)" id = "smp2"></td>
            <td id= "smp_img_block"><img src="smp3.png" width="100" height = "100" onclick="view_img_1(3)" id = "smp3"></td>
            <td id= "smp_img_block"><img src="smp4.png" width="100" height = "100" onclick="view_img_1(4)" id = "smp4"></td>
            <td id= "smp_img_block"><img src="smp5.png" width="100" height = "100" onclick="view_img_1(5)" id = "smp5"></td>
        </tr>
    </table>
    <div>
    <table>
               <tr>
                   <td><p style ="font-family: monospace;margin-left:100px; color:rgba(9, 182, 144, 0.8); font-size:150%">Place Picture</p></td>
               <td><p style ="font-family: monospace;margin-left:100px; color:rgba(9, 182, 144, 0.8);font-size:150%">Take a Picture</p></td>
            </tr>
            <tr>
            <td><img src = "camera2.png"  style ="margin-left:100px;"onclick= "Take_image()" id = "open_cam" width="100" height = "100"></td>
            <td><img src = "camera2.png" style ="margin-left:100px;"id = "cap" width="100" height = "100"></td>
    </tr>
</table>
        <div id = "signup">
        <form action= "upload.php" method = "post" enctype="multipart/form-data" id ="sum">
            <p id = "errmsg">
            <?php  
                foreach($_GET as $key => $val)
                {
                    echo "Error :".$val;
                }
            ?>
            <input type= "file" name= "file" id = "file">
            <input type= "hidden" name= "img_save" id = "img_save">
            <input type= "submit" name= "sub" id = "sub" value="_">
        </form>
    </div>
    <script src= "js/picview.js"></script>
    </div>
       
</div>
</div>

</body>
</html>
<?php
if (!isset($_SESSION))
{session_start();}
require_once("add.php");
if(isset($_POST['img_save']))  
 {
    if (!file_exists('img_s/'))
    {
        mkdir('img_s/',0755);
    }
    $rand = rand();
    add_img("img_s/image".$_SESSION['email'].$rand.".png",$_SESSION['email']);
    file_put_contents("img_s/image".$_SESSION['email'].$rand.".png",base64_decode(strchr($_POST['img_save'],",")));
    header('Location: http://localhost:8080/Camagru/mainview.php?Saved');
}           

?>