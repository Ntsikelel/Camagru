    <?php
        require_once  ("config/database.php");
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456";
    function is_exist($email,$user)
    {
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
            echo $e.getMessege();
        }
    }
    function get_id($email)
    {
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456";
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
            echo $e.getMessege();
        }
    }
    function get_uid($email)
    {
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456";
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
            echo $e.getMessege();
        }
    }
    function get_pass($pass, $email)
    {
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
            echo $e.getMessege();
        }
    }
    function get_username($username, $email)
    {
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
            echo $e.getMessege();
        }

    }
    function get_email($emailb,$emaila)
    {
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
            echo $e.getMessege();
        }
    }
    function get_email_by_id($id)
    {
        try
        {
            $DB_DSN = "mysql:host=localhost";
            $DB_USER = "root";
            $DB_PASSWORD = "123456";
            
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM users");
            //sleep(100000);
            while ($name = $stat->fetch())
            {
                if($name['id'] === $id)
            { 
                // sleep(100000);
                return ($name['email']);
                }
            }
        }
        catch (PDOException $e)
        {
            echo $e.getMessege();
        }
    }
    function get_is_act($num, $email)
    { 
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
            echo $e.getMessege();
        }
    }
    function get_is_pen($num, $email)
    {
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
            echo $e.getMessege();
        }
    }
    function get_displayname($displayname, $email)
    {
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
            echo $e.getMessege();
        }
    }
        function get_pictures()  
        {
            $DB_DSN = "mysql:host=localhost";
            $DB_USER = "root";
            $DB_PASSWORD = "123456";
            try
        {
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM pictures");
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
            echo $e.getMessege();
        }
    }
        function get_pic_id()
        {
            $DB_DSN = "mysql:host=localhost";
            $DB_USER = "root";
            $DB_PASSWORD = "123456";
            try
            {
                $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stat = $pdo->query("SELECT * FROM pictures");
                $arr[] = array();
                while ($name = $stat->fetch())
                {
                    $arr[] = ($name['id']);
                }
                return ($arr);
            }
            
            catch (PDOException $e)
            {
                echo $e.getMessege();
            }
        }
    function get_pic_num()
    {
        try
        {
            $DB_DSN = "mysql:host=localhost";
            $DB_USER = "root";
            $DB_PASSWORD = "123456";
            $count = 0;
            $pdo = new PDO($DB_DSN.';dbname='.'camagru;', $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stat = $pdo->query("SELECT * FROM pictures");
            while ($name = $stat->fetch())
            {
                    $count++;
            }
            return ($count);
        }
        catch (PDOException $e)
        {
            echo $e.getMessege();
        }
    }
    function show_com($id)
    {
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456";
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
      //  echo $e.getMessege();
    }

    }
    function get_pic_like($id)
    {
        $DB_DSN = "mysql:host=localhost";
        $DB_USER = "root";
        $DB_PASSWORD = "123456";
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
       // echo $e.getMessege();
    }

    }
    function html_insert()
    {
       require_once ("getfunc.php"); 
            session_start();
            $pic = get_pic_num(); 
            $arr = get_pictures();
            $arr_id = get_pic_id();
            $counter= 1;
            $likes = 0;
            while($pic-- > 0){
                $com = show_com($arr_id[$counter]);
                $likes = get_pic_like($arr_id[$counter]);
                echo '<div id = "image">
                <img src="'.$arr[$counter].'" width="400" height="400"/>
                <div id="like_com">
                <form action ="mainview.php" method="post">
                <p style = "float:left; font-family: monospace;background:red; width:17px; color: white; border-radius:50%; margin-left :20px; text-align:center;">'.$likes.'</p>
                <input type ="submit" name = "like" id ="like" value ="like" style = "margin-top: 10px; height:50%; width= "100%;">
                <input type = "hidden" name = "imgid" value='.$arr_id[$counter].'>
                <input type = "hidden" name = "imgpath" value='.$arr[$counter].'>
                </form>
                <form action ="mainview.php" method="post">
                <input type = "text" name = "com" placeholder="Comment" required><input type = "hidden" name = "imgid" value='.$arr_id[$counter].'>
                <input type ="submit" name = "comment"  value = "comment"id = "comment" style = "margin-top: 10px;width= "100%;"> <img src = "" alt="" width="50" height="50" onclick=""/>
                <input type = "hidden" name = "imgpath" value='.$arr[$counter].'>
                </form>
                </div>
                <img src= "show_com.png" width= "70" height="30"onclick= "show('.$arr_id[$counter].')"style = "background: white; margin-left: 40%;">
                <div style ="display: none; background:white;" id = "com_show'.$arr_id[$counter].'">'.$com.'
                </div></div>';
                $counter++;
            }
  }
    ?>