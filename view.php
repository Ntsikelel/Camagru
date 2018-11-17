
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/view.css" />
    <title>View</title>
</head>
<body>
    <div id="cont">
<div id = "header">
     <a href = "http://localhost:8080/Camagru/mainview.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
    <div id ="cam">
    <video id= "vid" width="600" height = "600" style= "background : black"></video> 
      <script src= "js/picview.js"></script>
    <table>
        <tr id="smp_img">
            <td id= "smp_img_block"><img src="smp1.png" width="100" height = "100" onclick="view_img(1)" id = "smp1"></td>
            <td id= "smp_img_block"><img src="smp2.png" width="100" height = "100" onclick="view_img(2)" id = "smp2"></td>
            <td id= "smp_img_block"><img src="smp3.png" width="100" height = "100" onclick="view_img(3)" id = "smp3"></td>
            <td id= "smp_img_block"><img src="smp4.png" width="100" height = "100" onclick="view_img(4)" id = "smp4"></td>
            <td id= "smp_img_block"><img src="smp5.png" width="100" height = "100" onclick="view_img(5)" id = "smp5"></td>
        </tr>
    </table>
    <div>
    <table>
               <tr>
                   <td><p style ="font-family: monospace;margin-left:100px; color:rgba(9, 182, 144, 0.8); font-size:150%">Open Camera</p></td>
               <td><p style ="font-family: monospace;margin-left:100px; color:rgba(9, 182, 144, 0.8);font-size:150%">Take a Picture</p></td>
            </tr>
            <tr>
            <td><img src = "camera2.png"  style ="margin-left:100px;"onclick= "open_camera()" id = "open_cam" width="100" height = "100"></td>
            <td><img src = "camera2.png" style ="margin-left:100px;"id = "cap" width="100" height = "100"></td>
    </tr>
</table>
    <div>
    <canvas id = "canv" width="500" height = "500" style= "background: transparent; left:0; top:70px; position:absolute; width:500px height=500px;"></canvas>
    <form  action="view.php" method="post" id="image_data" onsubmit= "alert('Submit')">
    <!-- <input type = "text" id = "image" value="her"/> -->
    <input type = "submit" name="submit" id = "sub"/>
    </form>
    </div>
    <!-- <div class="footer" style="    background:  rgba(9, 182, 144, 0.8);
    position: absolute;
    bottom: 0;
    left: 0;
    overflow: hidden;
    width: 100%;">
    <p style="float:right ;display:inline; color:white"> &copy nmetseem </p>
</div> -->
</div>
</body>
</html>

<?php
    if (!isset($_SESSION))
    {session_start();}
    require_once("add.php");
   if(isset($_POST['submit']))
   {
    if(isset($_POST['image']))
    {
        if (!file_exists('img_s/'))
        {
            mkdir('img_s/',0755);
        }
        $rand = rand();
        add_img("img_s/image".$_SESSION['email'].$rand.".png",$_SESSION['email']);
        file_put_contents("img_s/image".$_SESSION['email'].$rand.".png",base64_decode(strchr($_POST['image'],",")));
        header('Location: http://localhost:8080/Camagru/mainview.php?Saved');
    }
}
?>