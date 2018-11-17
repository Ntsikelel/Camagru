  
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
       // alert(data);

    });
}
function view_img(num)
{
    //alert('smp'+num);
    
    can = document.getElementById('canv');
    var cont = can.getContext('2d');
    var item = document.getElementById('smp'+ num);
    cont.drawImage(item,400,300,100,100);
    if(norep === false){
    var btn = document.createElement("BUTTON");
    btn.id = "save";
    btn.innerHTML =' <img src= "upload.png" width ="50" height = "50" style= "border-radius: 30%;"/>';
    btn.width = 100;
    btn.height = 100;
    // btn.setAttribute("type", "Submit");
    btn.style.background = "transparent";
    btn.style.border = "none";
    //alert(btn);
    var text = document.createTextNode("");
    btn.appendChild(text);
    document.getElementById('cam').appendChild(btn);
    norep = true;
}
    document.getElementById('save').addEventListener("click",function()
    {
        var data = can.toDataURL();
        var info = document.createElement("INPUT");
        info.id = "image";
        info.setAttribute("name","image");
        info.setAttribute("type","text");
        info.setAttribute("id","image");
        info.setAttribute("value",data);
        info.value = data;
      
       // alert(data);
        document.getElementById('image_data').appendChild(info);
      //   alert("This is name : "+document.getElementById('image').getAttribute("name"));
      //  alert("Wait"); 
         document.getElementById('sub').click();
       
    });
}
function view_img_1(num)
{
    alert('smp'+num);
    
    can = document.getElementById('canv');
    var cont = can.getContext('2d');
    var item = document.getElementById('smp'+ num);
    cont.drawImage(item,400,300,100,100);
    if(norep === false){
        var btn = document.createElement("BUTTON");
        btn.id = "save";
        btn.innerHTML =' <img src= "upload.png" width ="50" height = "50" style= "border-radius: 30%;"/>';
        btn.width = 100;
        btn.height = 100;
        btn.style.background = "transparent";
        btn.style.border = "none";
        var text = document.createTextNode("");
        btn.appendChild(text);
        document.getElementById('sum').appendChild(btn);
        norep = true;
    }
    document.getElementById('save').addEventListener("click",function()
    {
        var data = can.toDataURL();
        var info = document.getElementById("img_save");
        info.setAttribute("value",data);
        info.value = data;
        ajaxify(data,'POST','http://localhost:8080/Camagru/upload.php?');
    });
}
function ajaxify(data,method,url)
{
    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function()
    {
            if(ajax.readyState == 4 && ajax.status >= 200 && ajax.status <= 300)
            {
                console.log(ajax.responseText);
                //console.log(data);
            }
            else if(ajax.readyState== 4)
            {
                console.log(ajax.responseText);
            }
    }
    if(method === 'POST')
    {
        ajax.open(method,url,true);
        ajax.send();
        alert(data);
    }
}
function Take_image()
{
    var Filename = document.getElementById('file'),
    c_img = document.getElementById('canv'),
    co = c_img.getContext('2d');
    var image = new Image(600,600);
     image.src= Filename.value.replace('C:\\fakepath\\',"");
    co.drawImage(image,0,0,600,600);
    alert(Filename.value+ "    image src  :" + image.src) ;
}
