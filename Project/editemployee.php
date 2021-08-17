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
                    <form id="editEmployeeform" action="" method="POST" enctype="multipart/form-data">
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
                  <tr class="errname"><td></td></tr>                            
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
                  <tr class="errsalary"><td></td></tr> 
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
                   <tr class="errusername"><td></td></tr>    
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
                  <tr class="errpass"><td></td></tr>         
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

    <script>
    const name = document.getElementsByName("name")[0]
    const salary = document.getElementsByName("salary")[0]
    const username = document.getElementsByName("username")[0]
    const password = document.getElementsByName("password")[0]

    document.getElementById("editEmployeeform").addEventListener("submit", e => {

      document.querySelectorAll(".errname td")[0].innerText = ""
      document.querySelectorAll(".errsalary td")[0].innerText = ""
      document.querySelectorAll(".errusername td")[0].innerText = ""
      document.querySelectorAll(".errpass td")[0].innerText = ""
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
      if(salary.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errsalary td")[0].innerText = "Input required"
      } 
      else if(salary.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".errsalary td")[0].innerText = "required atlest 5 character"
      }
      

      //password
      if(username.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errusername td")[0].innerText = "Input required"
      } 
      else if(username.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".errusername td")[0].innerText = "required atlest 5 character"
      } 

      //password2
      if(password.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errpass td")[0].innerText = "Input required"
      } 
      else if(password.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".errpass td")[0].innerText = "required atlest 5 character"
      } 
    })
</script>
</html>