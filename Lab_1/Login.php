<?php
    //session_start();
    $username="";
    $err_username="";

    $pass="";
    $err_pass="";
    $hasError=false;

    $users=array("hafiz"=>"1234","1324"=>"1234","cccc"=>"1432");

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["username"]))
        {
            $hasError=true;
            $err_username="username required";
        }
        else
        {
            $username=$_POST["username"];
        }

        if(empty($_POST["password"]))
        {
            $hasError=true;
            $err_pass="password required";
        }
        else
        {
            $pass=$_POST["password"];
        }

        if(!$hasError)
        {
              foreach($users as $u=>$p)
              {
                  if($username==$u && $pass==$p)
                  {
                    //$_SESSION["Loged_Username"]=$username;
                    setcookie("Loged_Username",$username,time()+60);
                    header("Location:Dashboard.php");                      
                  }
                  else
                  {
                    echo "invalid";
                  }
              }         

        }
    }
?>

<html>
    <body>
        <form action="" method="post">
        username: <input type="text" name="username" value="<?php echo $username;?>"><span><?php echo $err_username;?></span><br>
        password: <input type="password" name="password" value="<?php echo $pass;?>"><span><?php echo $err_pass;?></span><br>
        <input type="submit" value="Login">
        </form>
    </body>
</html>