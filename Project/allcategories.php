<?php
    include_once 'admin_header.php';    
    include_once 'category_header.php';
    include 'Controllers/CategoryController.php';
    $categories=getAllCategories();
?>

<html>
    <head>
    <link rel="stylesheet" href="style/header.css">
    </head>
    <body >
        <table align="center">
            <tr>
                <td><b><u>Sl#</u></b><br><br></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <td><b><u>Name</u></b><br><br></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                <td><b><u>Product Count</u></b><br><br></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            </tr>
        
            <?php 
            $i=1;
            foreach($categories as $c){
                $id=$c["id"];
                echo "<tr>";
                echo "<td>$i&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";  
                echo "<td>".$c["name"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";  
                echo '<td><a class="commonButton" href="editcategory.php?id='.$id.'">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
                echo '<td><a class="Button2" href="deleteCategory.php?id='.$id.'">Delete</a><br><br><br></td>';               
                echo "</tr>";                
                $i++;  
            } 
            ?>
        </table>   
    </body>
</html>