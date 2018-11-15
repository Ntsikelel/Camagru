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
<div id = "header">
        <a href = "http://localhost:8080/Camagru/mainview.php">  <img src = "camagrulogo.png" width = "100" height = "100" id = "logo"></a>
        <!-- <p style="background:white"> Hello <?php //session_start(); echo $_SESSION['email']?></p>   -->
        <div id="nav">   
            <a href="editprofile.php"id = "btn">Edit Profile</a>   
            <a href="logout.php" >logout</a>  
        </div>
        <div id = "signup">
        <form action= "upload.php" method = "post" enctype="multipart/form-data">
            <p id = "errmsg">
            <?php  
                foreach($_GET as $key => $val)
                {
                    echo "Error :".$val;
                }
            ?>
            <input type= "file" name= "file" id= "file">
            <input  type= "submit" name="submit" value = "Upload"/><br/>
        </form>
    </div>
       
</div>
</body>
</html>
<?php



?>