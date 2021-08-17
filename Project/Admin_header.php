<?php
	session_start();    
?>

<html>
    <head>
    <link rel="stylesheet" href="style/header.css">
    </head>
    <body class="margin">
        <fieldset class="header1"> 
        <h1 class="h">Welcome <?php echo $_SESSION["loggeduser"];?></h1>
        <h3> 
            <a class="btn-link" href="dashboard.php" >Dashboard</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            <a class="btn-link" href="employee.php" >Employee</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <a class="btn-link" href="category.php" >Category</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn-link" href="product.php" >Products</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            
            <a class="btn-link" href="profileInfo.php">Profile</a>
        </h3>           
        </fieldset>
    </body>
</html>