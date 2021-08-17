<?php
    include_once 'admin_header.php';
    include 'Controllers/UserController.php';  
    $id=$_GET["id"];
    $ur=userinfo($id);  
?>

<html>
    <head></head>
    <table align="center" width="30%">
        <tr>
            <td>
                <body>
                    <form action="" method="POST">
                        <fieldset>
                        <legend align="center">
                        <img src="Login & signup.png" style="width: 150px; height: 150px"/>
                        </legend>
                            <table align="center">
                                <h1 align="center">Profile Info</h1>

                                <?php echo $err_db ?>
                                <tr>
                                <td ><b>Username</b></td>                                                  
                                </tr>
                                <tr>
                                <td ><input type="text" name="username" value="<?php echo $ur["username"]?>"/>
                                <?php
                                if(isset($err_username))
                                {                                   
                                echo '<tr><td>'.$err_username.'</td></tr>';
                                }
                                ?>
                                </td>                                
                                </tr>

                                <tr>
                                <td >Email Address</td>                                                   
                                </tr>
                                <tr>
                                <td><input type="text" name="email" value="<?php echo $ur["email"];?>"/>
                                <?php
                                if(isset($err_email))
                                {                                   
                                echo '<tr><td >'.$err_email.'</td></tr>';
                                }
                                ?>
                                </td>
                                </tr>
                                
                                <tr>
                                <td ><b>Gender</b></td>                                                  
                                </tr>
                                <tr>
                                <td >
                                <input  type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male
					            <input  name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female 
                                <?php
                                if(isset($err_gender))
                                {                                   
                                echo '<tr><td >'.$err_gender.'</td></tr>';
                                }
                                ?>
                                </td>
                                </tr>

                                <tr>
                                <td ><b >Password</b></td>                    
                                </tr>
                                <tr>
                                <td><input  type="Password" name="Password"  value="<?php echo $ur["password"];?>"/>
                                <?php
                                if(isset($err_password))
                                {                                   
                                echo '<tr><td >'.$err_password.'</td></tr>';
                                }
                                ?>
                                </td>
                                </tr>

                                <tr>
                                <td ><b > Confirm Password</b></td>                    
                                </tr>
                                <tr>
                                <td><input  type="Password" name="Confirm_Password"  value="<?php echo $ur["confirm_password"];?>"/>
                                <?php
                                if(isset($err_confirm_password))
                                {                                   
                                echo '<tr><td >'.$err_confirm_password.'</td></tr>';
                                }
                                ?><br><br>
                                </td>
                                </tr>

                                <tr>
                                <td colspan="2" align="center"><input class="commonButton" type="submit" name="update" value="Done"/></td>
                                </tr>

                                
                                </tr>

                            </table>
                        </fieldset>
                    </form>
                </body>
            </td>    
        </tr>
    </table>  
</html>