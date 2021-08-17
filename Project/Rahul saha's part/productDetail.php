<?php
    require_once 'Admin_header.php';
    include_once 'product_header.php';
    require_once 'Controllers/ProductController.php';
    require_once 'Controllers/CategoryController.php';
    $categories=getAllCategories();
?>

<html>
    <head>
        <title>Product Details</title>
    </head>
    <table align="center" width="30%">
        <tr>
            <td>
                <body>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <table align="center">

                                <?php echo"$err_db"?>                                
                                <tr>
                                <td ><b>Product name</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="name" placeholder="Product name" value=""/>                                
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Category</b></td>                                                  
                                </tr>
                                <tr>
                                <td>
                                    <select name="c_id">
                                        <option disabled selected>Choose</option>
                                        <?php
                                            foreach($categories as $c)
                                            {
                                                echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
                                            }
                                        ?>
                                    </select>                                    
                                </td>
                                </tr>
                                
                                <tr>
                                <td ><b>price</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="price" placeholder="Enter Price" value=""/>                                
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Quantity</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="qty" placeholder="enter Quantity" value=""/>                                
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>description</b></td>                    
                                </tr>
                                <tr>
                                <td>
                                    <textarea  type="text" name="desc" placeholder="Enter Description" value=""></textarea>                                
                                </td>
                                </tr>

                                <tr>
                                <td ><b>Photo</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="file" name="p_image">                                
                                </td>                                
                                </tr>

                                <tr>
                                <td colspan="2" align="center">
                                    <input class="commonButton" type="submit" name="Add_product" value="Add Product"/>
                                </td>
                                </tr>                               

                            </table>
                        </fieldset>
                    </form>
                </body>
            </td>    
        </tr>
    </table>  
</html>