<?php
require_once ("getfunc.php");
require_once ("config/database.php");
function send_act($email, $tok)
{
    $subject = "Account activation";
    $msg = "<html><body> 
    <style>
    #Head{font-family: monospace;}
    #linkbtn{background: rgb(0, 255, 200); padding: 20px;margin: 5px;color: white;text-decoration: none;border-radius: 20%;}
    </style>
    <h1 id = 'Head' style= 'font-family: monospace;'>Email to activate</h1>";
    $msg .= "<img src= 'https://cmzone-vzbqbxhynotw9ion96xv.netdna-ssl.com/wp-content/uploads/2015/11/canon1.jpg'/>
    <br/>";
    $msg .= "<a href='http://localhost:8080/Camagru/activate_user.php?email=$email&tok=$tok' id ='linkbtn' style = 'background: rgb(0, 255, 200,0.8); padding: 20px;margin: 5px;color: white;text-decoration: none;border-radius: 20%;'>Click to activate account</a></body></html>";
    //.$email."&token=".gen_token($email)." id ='linkbtn'>Activate</a>
    $header ="From : noreply@camagru.com \n";
    $header .= "Reply-To: nmetseem@student.wethinkcode.co.za \n";
    mail($email,$subject,$msg, $header);
}
function resend($email)
{
    $subject = "Resend";
    $msg = "<html><body> 
    <style>
    #Head{font-family: monospace;}
    #linkbtn{background: rgb(0, 255, 200); padding: 20px;margin: 5px;color: white;text-decoration: none;border-radius: 20%;}
    </style>
    <h1 id = 'Head'>Email to activate</h1>";
    $msg .= "<img src= 'https://cmzone-vzbqbxhynotw9ion96xv.netdna-ssl.com/wp-content/uploads/2015/11/canon1.jpg'/>
    <br/>";
    $msg .= "<a href='http://localhost:8080/Camagru/activate_user.php?email=$email&tok=$tok' id ='linkbtn'>Click to activate account</a></body></html>";
    //.$email."&token=".gen_token($email)." id ='linkbtn'>Activate</a>
    $header ="From : noreply@camagru.com \n";
    $header .= "Reply-To: nmetseem@student.wethinkcode.co.za \n";
    mail($email,$subject,$msg, $header);
    
}
function comment_like_mail($email)
{
    $subject = "Comment or Like";
    $msg = "<html><body> 
    <style>
    #Head{font-family: monospace;}
    #linkbtn{background: rgb(0, 255, 200); padding: 20px;margin: 5px;color: white;text-decoration: none;border-radius: 20%;}
    </style>
    <h1 id = 'Head'>Comment or Like on your picture</h1>";
    $msg .= "<img src= 'https://cmzone-vzbqbxhynotw9ion96xv.netdna-ssl.com/wp-content/uploads/2015/11/canon1.jpg'/>
    <br/>";
    $msg .= "<a href='http://localhost:8080/Camagru/mainview.php?' id ='linkbtn'>Click to activate account</a></body></html>";
    //.$email."&token=".gen_token($email)." id ='linkbtn'>Activate</a>
    $header ="From : noreply@camagru.com \n";
    $header .= "Reply-To: nmetseem@student.wethinkcode.co.za \n";
    mail($email,$subject,$msg, $header);
}
function res_pass($email,$tok)
{
    $subject = "Reset Password";
    $msg = "<html><body> 
    <style>
    #Head{font-family: monospace;}
    #linkbtn{background: rgb(0, 255, 200); padding: 20px;margin: 5px;color: white;text-decoration: none;border-radius: 20%;}
    </style>
    <h1 id = 'Head'>Email to activate</h1>";
    $msg .= "<img src= 'https://cmzone-vzbqbxhynotw9ion96xv.netdna-ssl.com/wp-content/uploads/2015/11/canon1.jpg'/>
    <br/>";
    $msg .= "<a href='http://localhost:8080/Camagru/changepassword.php?email=$email&tok=$tok' id ='linkbtn'>Click to activate account</a></body></html>";
    //.$email."&token=".gen_token($email)." id ='linkbtn'>Activate</a>
    $header ="From : noreply@camagru.com \n";
    $header .= "Reply-To: nmetseem@student.wethinkcode.co.za \n";
    mail($email,$subject,$msg, $header);
}

?>