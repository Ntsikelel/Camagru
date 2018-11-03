<?PHP

?>
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
    </div>
</body>
</html>