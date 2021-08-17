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
                    <form id="addEmployeeform" action="" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <table align="center">
                             
                                <tr>
                                <td ><b>Employee name</b></td>                                                  
                                </tr>                                
                                <tr>
                                <td>
                                    <input  type="text" name="name" placeholder="Product name" value=""/>  
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
                                    <select name="position">
                                        <option disabled selected>Choose</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Employee">Employee</option>
                                        <option value="Delivery man">Delivery Man</option>                                        
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
                                    <input  type="text" name="salary" placeholder="Enter Salary" value=""/>  
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
                                    <input  type="text" name="username" placeholder="Enter Username" value=""/>  
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
                                <input  type="text" name="password" placeholder="Enter Password" value=""/>   
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

    <script>
    const name = document.getElementsByName("name")[0]
    const salary = document.getElementsByName("salary")[0]
    const username = document.getElementsByName("username")[0]
    const password = document.getElementsByName("password")[0]

    document.getElementById("addEmployeeform").addEventListener("submit", e => {

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