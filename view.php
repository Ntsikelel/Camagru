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
    <table>
        <tr id="smp_img">
            <td><img src="smp1.png" width="100" height = "100"></td>
            <td><img src="smp2.png" width="100" height = "100"></td>
            <td><img src="smp1.png" width="100" height = "100"></td>
            <td><img src="smp2.png" width="100" height = "100"></td>
            <td><img src="smp1.png" width="100" height = "100"></td>
        </tr>
    </table>
    <script src= "js/picview.js"></script>
    <img src = "camera1.jpg" onclick= "open_camera()" id = "open_cam" width="60" height = "60">
    <img src = "camera1.jpg" id = "cap" width="60" height = "60">
    <canvas id = "canv" width="6400" height = "400" style= "background: transparent"></canvas>
    </div>
</body>
</html>