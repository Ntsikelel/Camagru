
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Page Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
<link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>

</head>
<body>
    <!-- <a href="http://localhost:8080/Camagru/index.php"><img src="camera1.jpg"  width = "100" height = "100" id="camera"/></a>  -->
<div id = "header">
        <a href = "http://localhost:8080/Camagru/main.php">  <img src = "camagrulogo.png" width = "100" height = "100" id = "logo"></a>
        <!-- <p style="background:white"> Hello <?php //session_start(); echo $_SESSION['email']?></p>   -->
        <div id="nav">   
            <a href="editprofile.php"id = "btn">Edit Profile</a>   
            <a href="logout.php" >logout</a>  
        </div>
</div>
<div id= "cont">
<div id ="bod_con">
    <div id="cam_img">
        <img src="mirrorless-camera-2x1-fullres-2024-1024x512.jpg" id = "cam_img_id" height="400" style="padding-left:10px;padding-right:40px;padding-top:40px;margin-right:40px;"/>
        <!-- <img src="backgr3.jpg" id = "cam_img_id" height="400" style="padding:10px;"/> -->
    </div>
    <div id = "images">
    
            <?php 
            require_once ("getfunc.php"); 
            //session_start();
            $pic = get_pic_num(); 
            $arr = get_pictures();
            $arr_id = get_pic_id();
            $counter= 1;
        // $com_c = get_com();
            while($pic-- > 0){
                $com = show_com($arr_id[$counter-1]);
                echo ' 
                <div id = "image">
                    <img src="'.$arr[$counter].'" width="400" height="400"/>
                    <div id="like_com">
                    <form action ="mainview.php" method="post">
                        <input type ="submit" name = "like" id ="like" > <img src = "like.jpg" width="50" height="50" onclick=""/>
                        <input type = "hidden" name = "imgid" value='.$arr_id[$counter-1].'>
                        <input type = "hidden" name = "imgpath" value='.$arr[$counter].'>
                    </form>
                    <form action ="mainview.php" method="post">
                        <input type = "text" name = "com" placeholder="Comment" required>
                        <input type = "hidden" name = "imgid" value='.$arr_id[$counter-1].'>
                <input type ="submit" name = "comment" id = "comment"> <img src = "comment.png" width="50" height="50" onclick=""/>
                <input type = "hidden" name = "imgpath" value='.$arr[$counter].'>
                </form>
                </div>'.$com.'</div>';
                $counter++;
                //$pic--;
            }
            ?>
            </div>
</div>
<a href="http://localhost:8080/Camagru/view.php"><img src="camera1.jpg"  width = "100" height = "100" id="camera"/></a> 
<a href="http://localhost:8080/Camagru/upload.php"><img src="upload.png"  width = "100" height = "100" id="camera"/></a> 
</div>
</body>
</html>
<?php
session_start();
require_once ("add.php");
require_once ("getfunc.php");
//echo "\n\n\n\n\n hello";
//  if(isset($_POST['submit']))
//  {
// header('Location: http://localhost:8080/Camagru/mainview.php?submit');
    if(isset($_POST['like']))
    {
        $email =$_SESSION['email'];
        add_like($id = get_id($email),$uid = $_POST['imgid']);
        header('Location:  http://localhost:8080/Camagru/mainview.php?like&id='.$id."&uid=".$uid);
    }
    if(isset($_POST['comment']))
    {
        add_comment($_POST['com'],$_SESSION['email'],$_POST['imgid']);
        header('Location:  http://localhost:8080/Camagru/mainview.php?comment');
    }
    
   
    //get_pictures();

// }
?>