<?php
require_once 'Models/db_config.php'; 

    $name="";
    $err_name="";

    $err_db="";
    $hasError=false;

      if(isset($_POST["add_category"]))
      {
        if( empty($_POST['name']) )
        {
        $err_name="category required";
        $hasError=true;
        }
        else if(strlen($_POST['name'])<= 4)
        {
        $err_name ="category required atlest 5 character";
        $hasError=true;
        }
        else
        {
        $name = $_POST["name"];
        }
        
        if(!$hasError)
        {
            $rs = insertCategory($_POST["name"]);
            if($rs === true)
            {
                header("Location:allcategories.php");
            } 
            $err_db = $rs;            
        }        
      }
      else if(isset($_POST["edit_category"]))
      {
        if( empty($_POST['name']) )
        {
        $err_name="category required";
        $hasError=true;
        }
        else if(strlen($_POST['name'])<= 4)
        {
        $err_name ="category required atlest 5 character";
        $hasError=true;
        }
        else
        {
        $name = $_POST["name"];
        }

        if(!$hasError)
        {
            $rs = updateCategory($_POST["name"] , $_POST["id"]);
            if($rs === true)
            {
                header("Location:allcategories.php");
            } 
            $err_db = $rs;            
        } 
      }

      else if(isset($_POST["Yes"]))
      {
        $rs = deleteCategory($_GET["id"]);
        if($rs === true)
        {
            header("Location:allcategories.php");
        } 
        $err_db = $rs;  
      }


      function insertCategory($name)
      {
        $query="insert into categories value (NULL,'$name')";
        return execute($query);
      }
      function getAllCategories()
      {
          $query="select * from categories"; 
          $rs = get ($query);
          return $rs ;
      }
      function getCategory($id)
      {
        $query="select * from categories where id=$id";
        $rs=get($query);
        return$rs[0];
      }
      function updateCategory($name,$id)
      {
        $query=" update categories set name='$name' where id=$id ";
        return execute($query);
      }
      function deleteCategory($id)
      {
        $query=" DELETE FROM categories WHERE id=$id ";
        return execute($query);
      }
?>
