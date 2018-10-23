<?php
<<<<<<< HEAD
  include_once ("getfunc.php");
function ver_pass($pass)
{
    if (strlen($pass) < 8 )
        return ("Password is to short");
 
}
function ver_email($email)
{
 
}
function ver_username($username)
{
    if (is_exists($username))
    {
        return ("Already Exists");
    }
}

=======

function passwdver($pass)
{
    if(strlen($pass) < 8)
    {
        return (false);
    }
}


>>>>>>> 30cfd86cdbdb840f4a1bca2fbc2e6d2d51a33ee7
?>