<?php
    include 'Models/db_config.php';

    $username="";
    $err_username="";

    $email="";
    $err_email="";

    $gender="";
    $err_gender="";

    $password="";
    $err_password="";

    $confirm_password="";
    $err_confirm_password="";

    $err_db="";
    $hasError=false;

  if( isset($_POST["Button_SignUp"]) )
  {
    //=============username===========
    if( empty($_POST['username']) )
    {
    $err_username="Name required";
    $hasError=true;
    }
    else if(strlen($_POST['username'])<= 4)
    {
    $err_username ="Username required atlest 5 character";
    $hasError=true;
    }
    else
    {
    $username = $_POST["username"];
    }

    //=============Email===========
    if( empty($_POST['email']) )
    {
    $err_email="Email required";
    $hasError=true;
    }
    else
    {
        $array= explode("@",$_POST['email']);
    
        if (count($array) != 2)
        {
            $err_email="Invalid email";
            $hasError=true;
        }
    
        else if (strlen($array[0]) == 0 || strlen($array[1]) < 3)
        {
            $err_email="Invalid email";
            $hasError=true;
        }
    
        else if (strpos($array[1], '.') == false) {
            $err_email="Invalid email";
            $hasError=true;
        }
        else
        {
            $email = $_POST["email"];
        }        
    }

    //=============gender===========
    if( empty($_POST['gender']) )
    {
    $err_gender="Gender required";
    $hasError=true;
    }
    else
    {
    $gender = $_POST["gender"];
    }

    //=============Password===========
    if(empty($_POST['Password']))
    {
    $err_password="Password required";
    $hasError=true;
    }
    else if(strlen($_POST["Password"]) <= 4)
    {
    $err_password="Password required atlest 5 character";
    $hasError=true;
    }
    else
    {
    $password = $_POST["Password"];
    }

    //=============Confirm_Password===========
    if( empty($_POST['Confirm_Password']) )
    {
    $err_confirm_password="Confirm your password";
    $hasError=true;
    }
    else if(strlen($_POST["Confirm_Password"]) <= 4)
    {
    $err_confirm_password="Password required atlest 5 character";
    $hasError=true;
    } 
    else
    {
    $confirm_password = $_POST["Confirm_Password"];
    }

    if($password != $confirm_password)
    {
    $err_confirm_password="Confirm your Password";
    $hasError=true;
    }

    //==========Do others===========
    if(!$hasError)
    {
      $rs=insertUsers($username,$email,$gender,$password,$confirm_password);
      if($rs===true)
      {
          header("Location:Login.php");
      }
      else
      {
           $err_db = $rs;
      }
    }
  } 
  
  //=================Username================
  if(isset($_POST["Button_LogIn"]))
  {
    if( empty($_POST['username']) )
    {
    $err_username="Name required";
    $hasError=true;
    }
    else if(strlen($_POST['username'])<= 4)
    {
    $err_username ="Username required atlest 5 character";
    $hasError=true;
    }
    else
    {
      $username = $_POST["username"];
    }

    //=================Password================
    if(empty($_POST['Password']))
    {
    $err_password="Password required";
    $hasError=true;
    }
    else if(strlen($_POST["Password"]) <= 4)
    {
    $err_password="Password required atlest 5 character";
    $hasError=true;
    }
    else
    {
      $password = $_POST["Password"];      
    }
    
    //=============checking==============
    if(!$hasError)
    {
      if(authenticateUser($username,$password))
      {
        header("Location: dashboard.php");
      }
      else
      {
          $err_db= "username/password invalid";
      }
    }
  }

  function insertUsers($username,$email,$gender,$password,$confirm_password)
  {
    $query="insert into users values (NULL,'$username','$email','$gender','$password','$confirm_password')";
    return execute($query);  
  }

  function authenticateUser($username,$password)
  {
    $query=" select * from users where username='$username' and password='$password' ";
    $rs = get ($query);
    if( count($rs)> 0)
    {
        return true;
    }
    else
    {
        return false;
    }    
  }
?>