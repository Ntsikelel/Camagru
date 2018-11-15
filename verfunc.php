<?php
  //require_once ("getfunc.php");
function ver_pass($pass)
{
    if (strlen($pass) < 8 ){
        return ("Password_is_to_short");}
    if (!preg_match('/[^a-zA-Z\d]/',$pass)){
        return ("Please_add_Special_Char_to_password");}
    if(!preg_match('/\d/',$pass)){
        return  ("Please_Add_Number");}
    return ('1');
}
function ver_email($email)
{
 
}
function ver_username($username)
{
  //  if (is_exists($username))
   // {
    //    return ("Already Exists");
   // }
}

?>