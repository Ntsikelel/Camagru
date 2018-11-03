  
    var can; 
    var cont;
    var norep = false;
   function open_camera()
{
    var cam = document.getElementById('vid');
    can = document.getElementById('canv');
    var btn = document.getElementById('open_cam');
    btn.parentNode.removeChild(btn);
 
    var cont = can.getContext('2d');
    navigator.mediaDevices.getUserMedia({video:true}).then(function(stream){cam.src = window.URL.createObjectURL(stream); cam.play();}); 
    
    document.getElementById('cap').addEventListener("click",function()
    {
        cont.drawImage(cam,0,0,500,500);
        var data = can.toDataURL();
        alert(data);

    });
}
function view_img(num)
{
    alert('smp'+num);
    
    can = document.getElementById('canv');
    var cont = can.getContext('2d');
    var item = document.getElementById('smp'+ num);
    cont.drawImage(item,400,300,100,100);
    if(norep === false){
    var btn = document.createElement("BUTTON");
    btn.id = "save";
    btn.innerHTML =' <img src= "save_image.jpg" width ="100" height = "100" style= "border-radius: 50%;"/>';
    btn.width = 100;
    btn.height = 100;
    btn.style.background = "transparent";
    btn.style.border = "none";
    var text = document.createTextNode("Save");
    btn.appendChild(text);
    
        document.getElementById('cam').appendChild(btn);
    norep = true;
}
    document.getElementById('save').addEventListener("click",function()
    {
        var data = can.toDataURL();
        alert(data);
        // "<?php  header('Location: http://localhost:8080/Camagru/login.php');?> ";
    });
}