<?php
function gen_tok($email)
{
    return (hash("whirlpool",$email,false));
}
?>