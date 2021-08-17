<?php
    require_once 'Models/db_config.php';
    //validation variable
    $err_db="";


    if (isset($_POST["Add_product"]))
    {
        //do validation
        //if no error

        // $name=basename($_FILES["p_image"]["name"]);
        // $ext=pathinfo($name,PATHINFO_EXTENSION);
        // $myfilename=uniqid().".$ext";
        // $target = "Storage/product_images/$myfilename";
        // $tmp_path=$_FILES["p_image"]["tmp_name"]; 
        // move_uploaded_file($tmp_path,$target);

        $fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
        $target="Storage/product_images/".uniqid().".$fileType";
        move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);

        $rs=insertProduct($_POST["name"] ,$_POST["c_id"] ,$_POST["price"] ,$_POST["qty"] ,$_POST["desc"],$target);
        if($rs===true)
        {
            header("Location:allProducts.php");
        }
        $err_db=$rs;
    }
    else if (isset($_POST["edit_product"])) 
    {
        //do validation
        //if no error
        $fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
        $target="Storage/product_images/".uniqid().".$fileType";
        move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);

        $rs = updateProduct($_POST["name"] ,$_POST["c_id"] ,$_POST["price"] ,$_POST["qty"] ,$_POST["desc"],$target,$_GET["id"]);
            if($rs === true)
            {
                header("Location:allProducts.php");
            } 
            $err_db = $rs;   
    }
    else if(isset($_POST["Yes"]))
    {
        $rs = deleteProduct($_GET["id"]);
        if($rs === true)
        {
            header("Location:allProducts.php");
        } 
        $err_db = $rs;  
    }

    function insertProduct($name,$c_id,$price,$qty,$desc,$img)
    {
        $query="insert into products value(NULL,'$name','$c_id','$price','$qty','$desc','$img')";
        return execute ($query);
    }
    function getProducts()
    {
        $query="SELECT p.*,c.name as 'c_name' FROM products p left join categories c on p.c_id = c.id";
        $rs=get ($query);
        return $rs;
    }
    function getProduct($id)
    {
        $query="select * from products where id=$id";
        $rs=get ($query);
        return $rs[0];
    }

    function getCategoryName()
    {
        $query="select * from categories";
        $rs=get ($query);
        return $rs;
    }
    function deleteProduct($id)
      {
        $query=" DELETE FROM products WHERE id=$id ";
        return execute($query);
      }
    function updateProduct($name,$c_id,$price,$qty,$desc,$img,$id)
    {
        $query=" UPDATE products SET name='$name', c_id='$c_id', price='$price', qty='$qty', description='$desc', img='$img' where id=$id ";
        return execute($query);
    }
?>