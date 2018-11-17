
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<!-- <meta  http-equiv="Refresh" content= "0; url = http://localhost:8080/Camagru/mainview.php"> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Page Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
<link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>

</head>
<body>
    <!-- <a href="http://localhost:8080/Camagru/mainview.php"><img src="camera1.jpg"  width = "100" height = "100" id="camera"/></a>  -->
<div id = "header">
        <a href = "http://localhost:8080/Camagru/mainview.php">  <img src = "camagrulogo.png" width = "100" height = "100" id = "logo"></a>
        <!-- <p style="font-family:monospace;"> Hello <?php require_once ("getfunc.php"); if (!isset($_SESSION))
               // {session_start();}  echo get_displayname($_SESSION['email'])."_"?></p>   -->
        <div id="nav">   
            <a href="editprofile.php" id = "btn">Edit Profile</a>   
      
        </div>
        <div id="nav_">  
            <a href="logout.php" id = "btn" >logout</a>  
        </div>
</div>
<div id= "cont">
<div id ="bod_con">
    <div id="cam_img">
        <div class="content" >
            <!-- <h1 style= "color:white; top:50% ;left:50%; postion:absolute;">Name </h1> -->
            <img src="Welcome_to_Camagru.png" id = "cam_img_id" height="400" style="padding:40px; background:rgba(255,255,255,0.1);"/>
        </div>
        
        <!-- <img src="backgr.jpg" id = "cam_img_id" height="400" style="padding:10px;"/> -->
        <div id = "sidebar" style= "overflow-x:scroll; height:410px; padding:0px;margin-top: 40px; ">
            <p>_</p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <h1 style="font-family:Impact, Charcoal, sans-serif;color:white;" id= "name"> Welcome <?php require_once ("getfunc.php"); if (!isset($_SESSION))
                {session_start();}  echo get_displayname($_SESSION['email'])."_"?></h1> 
        </div>
    </div>
    <div id = "images" style= "overflow-x:scroll">
    <?php require_once ("getfunc.php"); html_insert()?>
            </div>
            <script>
            window.onload = function ()
            {
                if(window.location == 'http://localhost:8080/Camagru/mainview.php')
                {
               //     window.location = window.location + '#1';
             //       window.location.reload();
                }
            }
                function show(theid)
                {    
                var show = document.getElementById('com_show'+theid);
                if (show.style.display === 'none')
            {
            show.style.display = 'block';
            }
            else
                {
                    show.style.display = 'none';
                }
            }
            </script>
            <div class="load">
                <table>
               <tr><td><p style ="font-family: monospace;margin-left:100px; color:rgba(9, 182, 144, 0.8);">Take a Picture</p></td>
               <td><p style ="font-family: monospace;margin-left:100px; color:rgba(9, 182, 144, 0.8);">Upload a Picture</p></td>
            </tr>
            <tr><td> <a href="http://localhost:8080/Camagru/view.php"><img src="camera2.png"  style= "margin-left:100px;"width = "100" height = "100" id="camera"/></a> </td>
            <td><a href="http://localhost:8080/Camagru/upload.php"><img src="upload.png"  style= "margin-left:100px;" width = "100" height = "100" id="camera_1"/></a></td>
        </tr>
        </table>        
                </div>        
        </div>
</div>
<div class="footer" style="    background:  rgba(9, 182, 144, 0.8);
    position: fixed;
    bottom: 0;
    left: 0;
    overflow: hidden;
    width: 100%;">
    <p style="float:right ;display:inline; color:white"> &copy nmetseem </p>
</div>
</body>
</html>
<?php
if (!isset($_SESSION))
{session_start(); //$_SESSION['email'] = '';
}
require_once ("add.php");
require_once ("getfunc.php");
require_once ("delete.php");
//var_dump($_SESSION);
    if(isset($_SESSION['email']) || $_SESSION['email'] === '')
    {
       // header('Location: index.php');
    }
    if(isset($_POST['like']))
    {
        $email = $_SESSION['email'];
        $uid = $_POST['imgid'];
        $id = $_POST['imguid'];
        add_like(get_email_by_id($id),$uid);
        // header('Location:  http://localhost:8080/Camagru/mainview.php?like&id='.$id."&uid=".$uid);
    }
    if(isset($_POST['comment']))
    {
        $id = $_POST['imguid'];
        add_comment($_POST['com'],$_SESSION['email'],$_POST['imgid'],get_email_by_id($id));
        //  header('Location:  http://localhost:8080/Camagru/mainview.php?comment');
    }
    if(isset($_POST['deletePic']))
    {
        $email = $_SESSION['email'];
        delete_img(get_id($email),$_POST['imgid']);
        //   header('Location:  http://localhost:8080/Camagru/mainview.php?delete');
    }
?>