<?php
    include_once 'admin_header.php';
    include_once 'product_header.php';
    require_once 'Controllers/ProductController.php';
    require_once 'Controllers/CategoryController.php';
    $products=getProducts();
?>
<html>
    <head>
    </head>
    <body>
        <table align="center">                
            <tr>
                <td><b><u>Sl#</u></b><br><br></td>
                <td><b><u>Name</u></b><br><br></td> 
                <td><b><u>Category</u></b><br><br></td>           
                <td><b><u>Price</u></b><br><br></td>
                <td><b><u>Quantity</u></b><br><br></td>
                <td><b><u>Description</u></b><br><br></td> 
            </tr>
        
            <?php 
                $i=1;
                foreach($products as $p)
                {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td><img width='80px' height='100px' src='".$p["img"]."'></td>"; 
                    echo "<td>".$p["name"]."</td>"; 
                    echo "<td>".$p["c_name"]."</td>";
                    echo "<td>".$p["price"]."</td>";
                    echo "<td>".$p["qty"]."</td>";   
                    echo "<td>".$p["description"]."</td>";   
                    echo '<td><a class="commonButton" href="editProduct.php?id='.$p["id"].'">Edit</a></td>';
                    echo '<td><a class="Button2" href="deleteProduct.php?id='.$p["id"].'">Delete</a></td>';            
                    echo "</tr>";                
                    $i++;                
                } 
            ?>
        </table>
    </body>
</html>






