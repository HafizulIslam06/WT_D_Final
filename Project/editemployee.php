<?php
    include_once 'admin_header.php';
    include_once 'employeHeader.php';
    require_once 'Controllers/employeeController.php';  
    $id=$_GET["id"];
    $emp=individualEmployee($id);  

    $temp=getEmployee();
?>

<html>
    <head>
        <title>Employee edit</title>
    </head>
    <table align="center" width="30%">
        <tr>
            <td>
                <body>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <table align="center">

                            <td><img src="<?php echo $pr["img"]; ?>" alt=""></img></td>

                                <?php echo"$err_db"?>                                
                                <tr>
                                <td ><b>Employee name</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="name" placeholder="Product name" value="<?php echo $emp["name"] ?>"/> 
                                    <?php
                    if(isset($err_name))
                    {                                   
                      echo '<tr><td>'.$err_name.'</td></tr>';
                    }
                  ?>                           
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Position</b></td>                                                  
                                </tr>
                                <tr>
                                <td>
                                <select name="position" >
                                        <option><?php echo $emp["position"] ?></option>
                                        <?php
                                            foreach($temp as $el)
                                            {
                                                echo "<option value='".$el["position"]."'>".$el["position"]."</option>";
                                            }
                                        ?>
                                    </select>  
                                    <?php
                    if(isset($err_position))
                    {                                   
                      echo '<tr><td>'.$err_position.'</td></tr>';
                    }
                  ?>                                     
                                </td>
                                </tr>
                                
                                <tr>
                                <td ><b>Salary</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="salary" value="<?php echo $emp["salary"] ?>"/>                                
                                    <?php
                    if(isset($err_salary))
                    {                                   
                      echo '<tr><td>'.$err_salary.'</td></tr>';
                    }
                  ?> 
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Username</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="username" value="<?php echo $emp["username"] ?>"/>                                
                                    <?php
                    if(isset($err_username))
                    {                                   
                      echo '<tr><td>'.$err_username.'</td></tr>';
                    }
                  ?>  
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Password</b></td>                    
                                </tr>
                                <tr>
                                <td>
                                <input  type="text" name="password" value="<?php echo $emp["password"] ?>"/>                                
                                <?php
                    if(isset($err_password))
                    {                                   
                      echo '<tr><td>'.$err_password.'</td></tr>';
                    }
                  ?>     
                            </td>
                                </tr>

                                <tr>
                                <td ><b>Photo</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td><img width='80px' height='100px' src="<?php echo $emp["img"]; ?>" alt=""></img>
                                    <input  type="file" name="p_image">                              
                                    
                                </td>                                
                                </tr>

                                <tr>
                                <td colspan="2" align="center">
                                    <input class="commonButton" type="submit" name="edit_employee" value="Edit"/>
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