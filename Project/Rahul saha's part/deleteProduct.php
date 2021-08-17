<?php
    include_once 'admin_header.php';     
    include 'Controllers/ProductController.php';
?>

<html>
    <head>
    </head>
    <body>
    <form  method="post" action="">
        <table align="center">                
            <tr>
                <td><h1>Are you sure?</h1></td>           
            </tr>           
            <tr>            
            <td><a class="commonButton" href="allproducts.php" >No</a></td>
            <td><input class="Button2" type="submit" name="Yes" value="Yes"></td>
            </tr>
        </table>
</form>
    </body>
</html>