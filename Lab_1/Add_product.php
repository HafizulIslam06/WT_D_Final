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
        <a href="">Add Product</a>
        <a href="">All Product</a>
        <a href="">All user</a>
        <a href="">All Categories</a>
        <br>
        <form action="" method="post">
        ID: <input type="text" name="ID" value=""><br>
        Name: <input type="text" name="Name" value=""><br>
        Quantity: <input type="text" name="Quantity" value=""><br>
        Price: <input type="text" name="Price" value=""><br>
        Discription: <input type="text" name="Discription" value=""><br>
        <input type="submit" value="ADD">
        </form>
    </body>
</html>