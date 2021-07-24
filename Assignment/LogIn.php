<?php
  include 'header.php';
  include 'controllers/UserController.php';
?>

<html>
  <head></head>
  <table align="center" width="27%">
    <tr>
      <td>
        <body
        >
          <form action="" method="POST">
            <fieldset>
              <legend align="center">
                <img
                />
              </legend>
              <table align="center">
                <br><br><br>
                <h1 align="center">Member Login</h1>
                <?php echo $err_db ?>
                
                <?php
                    if(isset($err_massage))
                    {
                      echo '<tr><td>'.$err_massage.'</td></tr>';
                    }
                ?>
                <tr>
                  <td ><b>Username</b></td>
                </tr>
                <tr>
                  <td>
                    <input type="text"  name="username" placeholder="Enter Your Username"  value="<?php echo $username;?>"/>
                    <?php
                    if(isset($err_username))
                    {                                   
                      echo '<tr><td>'.$err_username.'</td></tr>';
                    }
                  ?>
                  </td>                  

                </tr>

                <tr>
                  <td><b>Password</b></td>
                </tr>
                <tr>
                  <td>
                    <input type="Password" name="Password" placeholder="Enter Your Password" value="<?php echo $password;?>"/>
                    <?php
                    if(isset($err_password))
                    {
                      echo '<tr><td>'.$err_password.'</td></tr>';
                    }
                    ?><br><br>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" align="center">
                    <input type="submit" value="Login" name="Button_LogIn" />
                  </td>
                </tr>
                <tr>
                  <td colspan="2">Don't have and account?<a href="sign_up.php" >Sign Up</a><br><br><br><br><br>
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
<?php 
    include 'footer.php';
?>
