<?php
    include_once 'admin_header.php';
    include_once 'product_header.php';
    require_once 'Controllers/ProductController.php';  
    $id=$_GET["id"];
    $pr=getProduct($id);  
    
    $c_name=getCategoryName();
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
                                    <input  type="text" name="name" placeholder="Product name" value="<?php echo $pr["name"] ?>"/>                                
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Category</b></td>                                                  
                                </tr>
                                <tr>
                                <td>
                                    <select name="c_id" >
                                        <option>---Select---</option>
                                        <?php
                                            foreach($c_name as $k)
                                            {
                                                echo "<option value='".$k["id"]."'>".$k["name"]."</option>";
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
                                    <input  type="text" name="price" placeholder="Enter Price" value="<?php echo $pr["price"] ?>"/>                                
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Quantity</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="qty" placeholder="enter Quantity" value="<?php echo $pr["qty"] ?>"/>                                
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>description</b></td>                    
                                </tr>
                                <tr>
                                <td>
                                    <textarea  type="text" name="desc"><?php echo $pr["description"] ?></textarea>                                
                                </td>
                                </tr>

                                <tr>
                                <td ><b>Photo</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td><img width='80px' height='100px' src="<?php echo $pr["img"]; ?>" alt=""></img>
                                    <input type="file" name="p_image">                                
                                </td>                                
                                </tr>

                                <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="edit_product" value="Edit"/>
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