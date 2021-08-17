<?php
    include 'Models/db_config.php';
    $name="";
    $err_name="";

    $position="";
    $err_position="";

    $salary="";
    $err_salary="";

    $username="";
    $err_username="";

    $password="";
    $err_password="";


    $err_db="";
    $hasError=false;


  if( isset($_POST["addEmployee"]) )
  {
    if( empty($_POST['name']) )
    {
    $err_name="Name required";
    $hasError=true;
    }
    else if(strlen($_POST['name'])<= 4)
    {
    $err_name ="name required atlest 5 character";
    $hasError=true;
    }
    else
    {
    $name = $_POST["name"];
    }

    //=============Email===========
    if( empty($_POST['position']) )
    {
    $err_position="position required";
    $hasError=true;
    }       
    else
    {
        $position = $_POST["position"];
    }  

    //=============gender===========
    if( empty($_POST['salary']) )
    {
    $err_salary="salary required";
    $hasError=true;
    }
    else
    {
    $salary = $_POST["salary"];
    }

    if( empty($_POST['username']) )
    {
    $err_username="username required";
    $hasError=true;
    }
    else if(strlen($_POST['username'])<= 4)
    {
    $err_username ="username required atlest 5 character";
    $hasError=true;
    }
    else
    {
    $username = $_POST["salary"];
    }

    //=============Password===========
    if(empty($_POST['password']))
    {
    $err_password="Password required";
    $hasError=true;
    }
    else if(strlen($_POST["password"]) <= 4)
    {
    $err_password="Password required atlest 5 character";
    $hasError=true;
    }
    else
    {
    $password = $_POST["password"];
    }

    
    

    //==========Do others===========
    if(!$hasError)
    {
    $fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
    $target="Storage/product_images/".uniqid().".$fileType";
    move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);

      $rs=insertEmployee($_POST["name"] ,$_POST["position"] ,$_POST["salary"] ,$_POST["username"] ,$_POST["password"],$target);  
      
      if($rs===true && $ss===true)
      {          
          header("Location:allEmployee.php");
      }
        $err_db = $rs;
    }    
  } 

    else if(isset($_POST["Yes"]))
      {
        $rs = deleteEmployee($_GET["id"]);
        if($rs === true)
        {
            header("Location:allEmployee.php");
        } 
        $err_db = $rs;  
      }

    else if(isset($_POST["edit_employee"]))
    {
        if( empty($_POST['name']) )
    {
    $err_name="Name required";
    $hasError=true;
    }
    else if(strlen($_POST['name'])<= 4)
    {
    $err_name ="name required atlest 5 character";
    $hasError=true;
    }
    else
    {
    $name = $_POST["name"];
    }

    //=============Email===========
    if( empty($_POST['position']) )
    {
    $err_position="position required";
    $hasError=true;
    }       
    else
    {
        $position = $_POST["position"];
    }  

    //=============gender===========
    if( empty($_POST['salary']) )
    {
    $err_salary="salary required";
    $hasError=true;
    }
    else
    {
    $salary = $_POST["salary"];
    }

    if( empty($_POST['username']) )
    {
    $err_username="username required";
    $hasError=true;
    }
    else if(strlen($_POST['username'])<= 4)
    {
    $err_username ="username required atlest 5 character";
    $hasError=true;
    }
    else
    {
    $username = $_POST["salary"];
    }

    //=============Password===========
    if(empty($_POST['password']))
    {
    $err_password="Password required";
    $hasError=true;
    }
    else if(strlen($_POST["password"]) <= 4)
    {
    $err_password="Password required atlest 5 character";
    $hasError=true;
    }
    else
    {
    $password = $_POST["password"];
    }
    

    if(!$hasError)
    {
      $fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
      $target="Storage/product_images/".uniqid().".$fileType";
      move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);

      $rs = updateEmployee($_POST["name"] ,"dummy",$_POST["salary"] ,$_POST["username"] ,$_POST["password"],$target,$_GET["id"]);
          if($rs === true)
          {
              header("Location:allemployee.php");
          } 
          $err_db = $rs; 
    } 
        
    }

    
    function insertEmployee($name,$position,$salary,$username,$password,$img)
    {
        $query="insert into employee value(NULL,'$name','$position','$salary','$username','$password','$img')";
        return execute ($query);
    }
    function getEmployee()
    {
        $query="select * from employee";
        $rs=get ($query);
        return $rs;
    }
    function individualEmployee($id)
    {
        $query="select * from employee where id=$id";
        $rs=get ($query);
        return $rs[0];
    }
    function deleteEmployee($id)
    {
        $query=" DELETE FROM employee WHERE id=$id ";
        return execute($query);
    }
    function updateEmployee($name,$position,$salary,$username,$password,$img,$id)
    {
      $query="UPDATE employee SET name='$name', position='$position', salary='$salary', password='$password', img='$img' where id='$id' ";
      return execute($query);
    }
?>