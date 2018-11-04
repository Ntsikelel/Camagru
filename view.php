
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
<div id = "header">
     <a href = "http://localhost:8080/Camagru/index.php">  <img src = "camagrulogo.png" width = "100" height = "100" style id = "logo"></a>
    </div>
    <div id ="cam">
    <video id= "vid" width="600" height = "600" style= "background : black"></video> 
      <script src= "js/picview.js"></script>
    <table>
        <tr id="smp_img">
            <td><img src="smp1.png" width="100" height = "100" onclick="view_img(1)" id = "smp1"></td>
            <td><img src="smp2.png" width="100" height = "100" onclick="view_img(2)" id = "smp2"></td>
            <td><img src="smp3.png" width="100" height = "100" onclick="view_img(3)" id = "smp3"></td>
            <td><img src="smp4.png" width="100" height = "100" onclick="view_img(4)" id = "smp4"></td>
            <td><img src="smp5.png" width="100" height = "100" onclick="view_img(5)" id = "smp5"></td>
        </tr>
    </table>
  
    <img src = "camera1.jpg" onclick= "open_camera()" id = "open_cam" width="60" height = "60">
    <img src = "camera1.jpg" id = "cap" width="60" height = "60">
    <canvas id = "canv" width="6400" height = "400" style= "background: transparent"></canvas>
    <form  action="view.php" method="post" id="image_data" onsubmit= "alert('Submit')">
    <!-- <input type = "text" id = "image" value="her"/> -->
    <input type = "submit" name="submit" id = "sub"/>
    </form>
    </div>
</body>
</html>

<?php
   require_once("add.php");
   if(isset($_POST['submit']))
   {
       print_r($_POST);
   }
    if(isset($_POST['image']))
    {
     
      //  header('Location: http://localhost:8080/Camagru/signup.php');
      //  print_r($_POST);
      header('Content-Type: image/png');
       sleep(100000);
      exit();
     add_img(strchr($_POST['image'],","));
    file_put_contents("img_s/",base64_decode(strchr($_POST['image'],",")));
    }
    
?>