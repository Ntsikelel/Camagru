(function()
{
    var video = getElementById('vid');
    var Url = getMediaURL||webkit.Url;

    navigator.getUserMedia   = navigator.getuserMedia|| navigator.webkitGetUserMedia;
    getuserMedia(video = true,function(stream){ vid.src = createObjectURL(stream)},function(err){});
})
();