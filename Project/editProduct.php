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
                    <form id="editproductform" action="" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <table align="center">

                                <?php echo"$err_db"?>                                
                                <tr>
                                <td ><b>Product name</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="name" placeholder="Product name" value="<?php echo $pr["name"] ?>"/>                                
                                
                                    <?php
                    if(isset($err_Pname))
                    {                                   
                      echo '<tr><td>'.$err_Pname.'</td></tr>';
                    }
                  ?> 
                  <tr class="errname"><td></td></tr> 
                  </td>                                
                                </tr>

                                <tr>
                                <td ><b>Category</b></td>                                                  
                                </tr>
                                <tr>
                                <td>
                                    <select name="c_id" >
                                        <option><?php echo $pr["c_id"] ?></option>
                                        <?php
                                            foreach($c_name as $k)
                                            {
                                                echo "<option value='".$k["id"]."'>".$k["name"]."</option>";
                                            }
                                        ?>
                                    </select>                                    
                                    <?php
                    if(isset($err_c_id))
                    {                                   
                      echo '<tr><td>'.$err_c_id.'</td></tr>';
                    }
                  ?> 
                                </td>
                                </tr>
                                
                                <tr>
                                <td ><b>price</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="price" placeholder="Enter Price" value="<?php echo $pr["price"] ?>"/>                                
                                    <?php
                    if(isset($err_price))
                    {                                   
                      echo '<tr><td>'.$err_price.'</td></tr>';
                    }
                  ?> 
                  <tr class="errprice"><td></td></tr>
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Quantity</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="qty" placeholder="enter Quantity" value="<?php echo $pr["qty"] ?>"/>                                
                                    <?php
                    if(isset($err_qty))
                    {                                   
                      echo '<tr><td>'.$err_qty.'</td></tr>';
                    }
                  ?> 
                  <tr class="errqty"><td></td></tr>
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>description</b></td>                    
                                </tr>
                                <tr>
                                <td>
                                    <textarea  type="text" name="desc"><?php echo $pr["description"] ?></textarea>                                
                                    <?php
                    if(isset($err_desc))
                    {                                   
                      echo '<tr><td>'.$err_desc.'</td></tr>';
                    }
                  ?> 
                  <tr class="errdesc"><td></td></tr>
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

    <script>
    const name = document.getElementsByName("name")[0]
    const price = document.getElementsByName("price")[0]
    const qty = document.getElementsByName("qty")[0]
    const desc = document.getElementsByName("desc")[0]

    document.getElementById("editproductform").addEventListener("submit", e => {

      document.querySelectorAll(".errname td")[0].innerText = ""
      document.querySelectorAll(".errprice td")[0].innerText = ""
      document.querySelectorAll(".errqty td")[0].innerText = ""
      document.querySelectorAll(".errdesc td")[0].innerText = ""
      
      //username
      if(name.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errname td")[0].innerText = "Input required"
      } 
      else if(name.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".errname td")[0].innerText = "required atlest 5 character"
      } 

      //email
      if(price.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errprice td")[0].innerText = "Input required"
      }       

      //password
      if(qty.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errqty td")[0].innerText = "Input required"
      } 

      //password2
      if(desc.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errdesc td")[0].innerText = "Input required"
      } 
      else if(desc.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".errdesc td")[0].innerText = "required atlest 5 character"
      } 
    })
</script>

</html>