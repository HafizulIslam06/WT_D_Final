<?php    
    include_once 'admin_header.php';
    include_once 'employeHeader.php';
    include_once 'Controllers/employeeController.php';
    $employee=getEmployee();
?>


<html>
    <head>
    <link rel="stylesheet" href="style/header.css">
    </head>
    <body >
        <table align="center">
            <tr>
                <td><b><u>Sl# </u></b><br><br></td>
                <td><b><u>Photo</u></b><br><br></td>
                <td><b><u>Name</u> </b><br><br></td> 
                <td><b><u>Position</u></b><br><br></td> 
                <td><b><u>Salary</u></b><br><br></td>
                <td><b><u>Username</u></b><br><br></td> 
                <td><b><u>Password</u></b><br><br></td>
                
            </tr>
        
            <?php 
            $i=1;
            foreach($employee as $e){
                $id=$e["id"];
                echo "<tr>";
                echo "<td>$i</td>";  
                echo "<td><img width='80px' height='100px' src='".$e["img"]."'>"; 
                echo "<td>".$e["name"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; 
                echo "<td>".$e["position"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";  
                echo "<td>".$e["salary"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; 
                echo "<td>".$e["username"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; 
                echo "<td>".$e["password"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";                 
                
                echo '<td><a class="commonButton" href="editemployee.php?id='.$e["id"].'">Edit</a></td>';
                echo '<td><a class="Button2" href="deleteEmployee.php?id='.$e["id"].'">Delete</a></td>';               
                echo "</tr>";                
                $i++;  
            } 
            ?>
        </table>   
    </body>
</html>