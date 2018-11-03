<?PHP

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel= "shortcut icon" type = "image/ico" href="icon.ico"/>
    <title>View</title>
</head>
<body>
    <div id =" cam">
    <video id= "vid" width="600" height = "600" style= "background : black"></video> 
    <script src= "js/picview.js"></script>
    <button onclick= "open_camera()">click</button> 
    <button id = "cap">capture</button> 
    <canvas id = "canv" width="500" height = "500" style= "background : black"></canvas>
    </div>
</body>
</html>