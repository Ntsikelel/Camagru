<?php
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

?>