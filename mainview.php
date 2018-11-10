
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
            <a href="logout.php" style="background:white;">logout</a>  
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
        <div id = "sidebar" style= "overflow-x:scroll; height:420px; padding:40px;margin-left: 0px; ">
        <!-- <p style= "color:white;">11111111111111111111</p>
        <p>11111111111111111111</p>
        <p style= "color:white;">11111111111111111111</p>
        <p>1</p>
        <p style= "color:white;">11111111111111111111</p>
        <p>1</p>
        <p style= "color:white;">11111111111111111111</p>
        <p>1</p>
        <p style= "color:white;">11111111111111111111</p>
        <p>1</p>
        <p style= "color:white;">11111111111111111111</p>
        <p>1</p>
        <p style= "color:white;">11111111111111111111</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p>
        <p>1</p><p>1</p> -->

        </div>
    </div>
    <div id = "images" style= "overflow-x:scroll">
    
            <?php 
            require_once ("getfunc.php"); 
            //session_start();
            $pic = get_pic_num(); 
            $arr = get_pictures();
            $arr_id = get_pic_id();
            $counter= 1;
            $likes = 0;
           
        // $com_c = get_com();
        if ($pic > 1)
        {
          //  $counter= 2;
        }
        else
        {
           // $counter = 1;
        }
            while($pic-- > 0){
                $com = show_com($arr_id[$counter-1]);
                 $likes = get_pic_like($arr_id[$counter-1]);
                echo ' 
                <div id = "image">
                    <img src="'.$arr[$counter].'" width="400" height="400"/>
                    <div id="like_com">
                    <form action ="mainview.php" method="post"><p style = "font-family: monospace;">'.$likes.'</p>
                        <input type ="submit" name = "like" id ="like" style = "background- " > 
                        <input type = "hidden" name = "imgid" value='.$arr_id[$counter-1].'>
                        <input type = "hidden" name = "imgpath" value='.$arr[$counter].'>
                    </form>
                    <form action ="mainview.php" method="post">
                        <input type = "text" name = "com" placeholder="Comment" required>
                        <input type = "hidden" name = "imgid" value='.$arr_id[$counter-1].'>
                <input type ="submit" name = "comment" id = "comment"> <img src = "comment.png" width="50" height="50" onclick=""/>
                <input type = "hidden" name = "imgpath" value='.$arr[$counter].'>
                </form>
                </div><img src= "show_com.png" width= "70" height="30"onclick= "show('.$arr_id[$counter - 1].')"><div style = "display:none;"id = "com_show'.$arr_id[$counter - 1].'">'.$com.'</div></div>';
                $counter++;
                //$pic--;
            }
            ?>
            </div>
            <script>
             function like()
             {
                alert('here');
                // document.getElementById('like').submit();
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
            <div class="load"><a href="http://localhost:8080/Camagru/view.php"><img src="camera1.jpg"  width = "100" height = "100" id="camera"/></a> 
<a href="http://localhost:8080/Camagru/upload.php"><img src="upload.png"  width = "100" height = "100" id="camera"/></a> </div>
            
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
session_start();
require_once ("add.php");
require_once ("getfunc.php");
//echo "\n\n\n\n\n hello";
//  if(isset($_POST['submit']))
//  {
// header('Location: http://localhost:8080/Camagru/mainview.php?submit');
    if(isset($_POST['like']))
    {
        $email = $_SESSION['email'];
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