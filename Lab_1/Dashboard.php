<?php
    //session_start();    
    if( !isset($_COOKIE["Loged_Username"]) )
    {
        header("Location:Login.php");  
    }
?>

<html>
    <body>
        <h1 align="center">Welcome <?php echo $_COOKIE["Loged_Username"];?></h1>
        <a href="Add_product.php">Add Product</a>
        <a href="">All Product</a>
        <a href="">All user</a>
        <a href="">All Categories</a>
    </body>
</html>