<?php

function send_act($email)
{
    $subject = "Account activation";
    $msg = "Email to activate";
    $header ="";
    mail($email,$subject,$msg);
}
function resend($email)
{
    $subject = "Account activation";
    $msg = "Email to activate";
    $header ="";
    mail($email,$subject,$msg);
    
}
function comment_like_mail($email)
{
    $subject = "Account activation";
    $msg = "Email to activate";
    $header ="";
    mail($email,$subject,$msg);
}

?>