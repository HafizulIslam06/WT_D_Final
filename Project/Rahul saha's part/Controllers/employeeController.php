<?php
    include 'Models/db_config.php';
    $err_db="";


  if( isset($_POST["addEmployee"]) )
  {
    $fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
    $target="Storage/product_images/".uniqid().".$fileType";
    move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);

      $rs=insertEmployee($_POST["name"] ,$_POST["position"] ,$_POST["salary"] ,$_POST["username"] ,$_POST["password"],$target);
      if($rs===true)
      {
          header("Location:allEmployee.php");
      }
        $err_db = $rs;
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
        $fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
        $target="Storage/product_images/".uniqid().".$fileType";
        move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);

        $rs = updateEmployee($_POST["name"] ,$_POST["position"] ,$_POST["salary"] ,$_POST["username"] ,$_POST["password"],$target,$_GET["id"]);
            if($rs === true)
            {
                header("Location:allemployee.php");
            } 
            $err_db = $rs; 
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
      $query="UPDATE employee SET name='$name' position='$position' salary='$salary' username='$username' password='$password' img='$img' where id='$id' ";
      return execute($query);
    }
?>