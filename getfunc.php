    <?php
        require_once  ('config/database.php');
    function is_exist($email,$user)
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");
            while ($name = $stat->fetch())
            {
                if($name['email'] === $email)
                {
                return ("UserExits");
                }
            }
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
    function get_id($email)
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");
            while ($name = $stat->fetch())
            {
                if($name['email'] === $email)
                {
                return ($name['id']);
                }
            }
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
    function get_uid($email)
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");
            while ($name = $stat->fetch())
            {
                if($name['email'] === $email)
                {
                return ($name['id']);
                }
            }
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
    function get_pass($pass, $email)
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");
            while ($name = $stat->fetch())
            {
                if($name['email'] === $email && $pass === $name['passwd'])
                { 
                return ($name['passwd']);
                }
            }
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
    function get_username($username, $email)
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");
            while ($name = $stat->fetch())
            {
                if($name['email'] === $email)
            { 
                    return ($name['username']);
                }
            }
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }

    }
    function get_email($emailb,$emaila)
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");
            while ($name = $stat->fetch())
            {
                if($name['email'] === $emailb)
            { 
                return ($name['email']);
                }
            }
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
    function get_email_by_id($id)
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");

            while ($name = $stat->fetch())
            { 
                if($name['id'] === $id)
                 {    
                     return ($name['email']);
                }
            }
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
    function get_is_act($num, $email)
    { 
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $stat = $pdo->query("SELECT * FROM users");
            while ($name = $stat->fetch())
            {
                if($name['email'] === $email)
            { 
                return ($name['is_act']);
                }
            }
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
    function get_is_pen($email)
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");
            while ($name = $stat->fetch())
            {
             
                if($name['email'] === $email)
                 { 
                return ($name['is_pen']);
                }
            }
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
    function get_displayname($email)
    {
   
         global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        { 
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");
            while ($name = $stat->fetch())
            {
                if($name['email'] === $email)
                { 
                    return ($name['displayname']);
                }
            }
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
        function get_pictures()  
        {
            global $DB_DSN,$DB_USER,$DB_PASSWORD;
            try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM pictures ORDER BY pictures.id DESC");
            $arr[] = array();
            while ($name = $stat->fetch())
            {
                    $arr[] =  $name['path'];
                //  exit();
            }
            return ($arr);
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
        function get_pic_uid()
        {
            global $DB_DSN,$DB_USER,$DB_PASSWORD;
            try
            {
                $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stat = $pdo->query("SELECT * FROM pictures ORDER BY pictures.id DESC");
                $arr[] = array();
                while ($name = $stat->fetch())
                {
                    $arr[] = ($name['u_id']);
                }
                return ($arr);
            }
            
            catch (PDOException $e)
            {
                echo "Error : in PDO\n";
            }
        }
        function get_pic_id()
        {
            global $DB_DSN,$DB_USER,$DB_PASSWORD;
            try
            {
                $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stat = $pdo->query("SELECT * FROM pictures ORDER BY pictures.id DESC");
                $arr[] = array();
                while ($name = $stat->fetch())
                {
                    $arr[] = ($name['id']);
                }
                return ($arr);
            }
            catch (PDOException $e)
            {
                echo "Error : in PDO\n";
            }
        }
    function get_pic_num()
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $count = 0;
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM pictures ORDER BY pictures.id DESC");
            while ($name = $stat->fetch())
            {
                    $count++;
            }
            return ($count);
        }
        catch (PDOException $e)
        {
            echo "Error : in PDO\n";
        }
    }
    function show_com($id)
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM comments WHERE id=".intval($id));
        $arr = "";   
        while ($name = $stat->fetch())
        {
                $arr .=   '<div id="c" ><p id = "put_com" style= "padding: 2px;
                border-bottom: 1px solid grey; color:grey;">'.$name['comment'].'</p></div>';
        }  
         return ($arr);
    }
  
    catch (PDOException $e)
    {
        echo "Error : in PDO\n";
    }

    }
    function get_pic_like($id)
    {
        global $DB_DSN,$DB_USER,$DB_PASSWORD;
        try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stat = $pdo->query("SELECT * FROM pictures WHERE id=".intval($id));
       
        while ($name = $stat->fetch())
        {
            return ($name['likes']);
        }  
     
    }
  
    catch (PDOException $e)
    {
       echo "Error : in PDO\n";
    }

    }
    function html_insert()
    {
       require_once ("getfunc.php"); 
       if (!isset($_SESSION))
       {session_start();}
            $pic = get_pic_num(); 
            $arr = get_pictures();
            $arr_id = get_pic_id();
            $arr_uid = get_pic_uid();
            $counter= 1;
            $likes = 0;
            
            while($pic-- > 0){
                $delete = "";
                if(get_id($_SESSION['email']) == $arr_uid[$counter])
                {
                    $delete = '<form action ="mainview.php" method="post"><input type="submit" name = "deletePic"value= "delete Picture">
                    <input type = "hidden" name = "imgid" value='.$arr_id[$counter].'></form>';
                }
                $com = show_com($arr_id[$counter]);
                $likes = get_pic_like($arr_id[$counter]);
                echo '<div id = "image">
                <img src="'.$arr[$counter].'" width="400" height="400"/>
                <div id="like_com">
                <form action ="mainview.php" method="post">
                <p style = "float:left; font-family: monospace;background:red; width:17px; color: white; border-radius:50%; margin-left :20px; text-align:center;">'.$likes.'</p>
                <input type ="submit" name = "like" id ="like" value ="like" style = "margin-top: 10px; height:50%; width= "100%;">
                <input type = "hidden" name = "imgid" value='.$arr_id[$counter].'>
                <input type = "hidden" name = "imguid" value='.$arr_uid[$counter].'>
                <input type = "hidden" name = "imgpath" value='.$arr[$counter].'>
                </form>
                <form action ="mainview.php" method="post">
                <input type = "text" name = "com" placeholder="Comment" required><input type = "hidden" name = "imgid" value='.$arr_id[$counter].'> <input type = "hidden" name = "imguid" value='.$arr_uid[$counter].'>
                <input type ="submit" name = "comment"  value = "comment"id = "comment" style = "margin-top: 10px;width= "100%;"> <img src = "" alt="" width="50" height="50" onclick=""/>
                <input type = "hidden" name = "imgpath" value='.$arr[$counter].'>
                </form>
                </div>'.$delete.'
                <img src= "show_com.png" width= "70" height="30"onclick= "show('.$arr_id[$counter].')"style = "background: white; margin-left: 40%;">
                <div style ="display: none; background:white;" id = "com_show'.$arr_id[$counter].'">'.$com.'
                </div></div>';
                $counter++;
            }
  }
    ?>