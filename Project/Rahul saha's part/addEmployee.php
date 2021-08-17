<?php    
    include_once 'admin_header.php';
    include_once 'employeHeader.php';
    include_once 'Controllers/employeeController.php';
?>

<html>
    <head>
        <title>Employee Details</title>
    </head>
    <table align="center" width="30%">
        <tr>
            <td>
                <body>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <table align="center">
                             
                                <tr>
                                <td ><b>Employee name</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="name" placeholder="Product name" value=""/>                                
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Position</b></td>                                                  
                                </tr>
                                <tr>
                                <td>
                                    <select name="position">
                                        <option disabled selected>Choose</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Employee">Employee</option>
                                        <option value="Delivery man">Delivery Man</option>                                        
                                    </select>                                    
                                </td>
                                </tr>
                                
                                <tr>
                                <td ><b>Salary</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="salary" placeholder="Enter Salary" value=""/>                                
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Username</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="username" placeholder="Enter Username" value=""/>                                
                                </td>                                
                                </tr>

                                <tr>
                                <td ><b>Password</b></td>                    
                                </tr>
                                <tr>
                                <td>
                                <input  type="text" name="password" placeholder="Enter Password" value=""/>                                
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
                                    <input class="commonButton" type="submit" name="addEmployee" value="Add Employee"/>
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