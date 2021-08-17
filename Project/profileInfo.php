<?php
    include_once 'admin_header.php';
    include_once 'controllers/UserController.php';
    $info=getuserinfo();
?>

<html>
    <head>
    </head>
    <body>
        <table align="center">                
            <tr>
                <td><b><u>Sl#</u></b><br><br></td>
                <td><b><u>Name</u></b><br><br></td> 
                <td><b><u>email</u></b><br><br></td>           
                <td><b><u>gender</u></b><br><br></td>
                <td><b><u>password</u></b><br><br></td>
                <td><b><u>Position</u></b><br><br></td> 
            </tr>

            <?php 
            $i=1;
            foreach($info as $e){
                $id=$e["id"];
                echo "<tr>";
                echo "<td>$i</td>";  
                echo "<td>".$e["username"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; 
                echo "<td>".$e["email"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";  
                echo "<td>".$e["gender"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; 
                echo "<td>".$e["password"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>"; 
                echo "<td>".$e["userType"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";                 
                
                echo '<td><a class="commonButton" href="profileUpdate.php?id='.$e["id"].'">Edit</a></td>';           
                echo "</tr>";                
                $i++;  
            } 
            ?>
        </table>
    </body>
</html>