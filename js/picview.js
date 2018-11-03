function open_camera()
{
    var cam = document.getElementById('vid');
    var can = document.getElementById('canv');
    var cont = can.getContext('2d');
    navigator.mediaDevices.getUserMedia({video:true}).then(function(stream){cam.src = window.URL.createObjectURL(stream); cam.play();}); 
    
    document.getElementById('cap').addEventListener("click",function()
    {
        cont.drawImage(cam,0,0,500,500);
    });
}