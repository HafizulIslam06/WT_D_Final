<?php
    include 'Models/db_config.php';
	$name="";
	$err_name="";
	$hasError=false;
	$err_db="";
		
if(isset($_POST["add_category"]))   
{

    if( empty($_POST['name']) )
    {
        $err_name="Name required";
        $hasError=true;
    }
    else if(strlen($_POST['name'])<= 3)
    {
        $err_name ="Name required atlest 3 character";
        $hasError=true;
    }
    else
    {
        $name = $_POST["name"];
    }

    if(!$hasError)
    {
        $rs=insertCategory($_POST["name"]);
        if($rs===true){
            header("Location: allcategories.php");
        }
        $err_db=$rs;
    }

}
else if(isset($_POST["edit_category"]))
{
    $rs=updateCategory($_POST["name"],$_POST["id"]);
    if($rs=== true)
    {
            header("Location: allcategories.php");
    }
    $err_db=$rs;
}


function insertCategory($name){
    $query="insert into categories values(NULL,'$name')";
    return execute($query);
}
function getAllCategories(){
    $query="select * from categories";
    $rs=get($query);
    return $rs;
}

function getCategory($id){
    $query="select * from categories where id=$id";
    $rs=get($query);
    return $rs[0];
}

function updateCategory($name,$id)
{
    $query="update categories set name='$name' where id = $id";
    return execute($query);
}
?>