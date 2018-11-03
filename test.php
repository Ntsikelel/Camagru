<?php
    function gen_tok($email)
    {
        return (hash("whirlpool",$email,false));
    }
    print_r(gen_tok("Hello@gmail.com"));
?>