<?php

function send_act($email)
{
    $subject = "Account activation";
    $msg = "<html><body> 
    <style>
    #Head{font-family: monospace;}
    #linkbtn{background: rgb(0, 255, 200); padding: 20px;margin: 5px;color: white;text-decoration: none;border-radius: 20%;}
    </style>
    <h1 id = 'Head'>Email to activate</h1>";
    $msg .= "<img src= 'https://cmzone-vzbqbxhynotw9ion96xv.netdna-ssl.com/wp-content/uploads/2015/11/canon1.jpg'/>
    <br/>";
    $msg .= "<a href='http://localhost:8080/Camagru/login.php?email=$email'id ='linkbtn'>Click to activate account</a></body></html>";
    //.$email."&token=".gen_token($email)." id ='linkbtn'>Activate</a>
    $header ="From : noreply@camagru.com \n";
    $header .= "Reply-To: nmetseem@student.wethinkcode.co.za \n";
    mail($email,$subject,$msg, $header);
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