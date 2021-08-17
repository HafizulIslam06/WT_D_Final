<?php
  include 'header.php';
  include 'controllers/UserController.php';
?>

<html>
  <head>  
  </head>
  <table align="center" width="27%">
    <tr>
      <td>
        <body background="Homepage.png" style="background-size: 100% 100%">
          <form id="loginform" action="" method="POST">
            <fieldset>
              <legend align="center">
              <img src="Login & signup.png" style="width: 150px; height: 150px"/>
              </legend>
              <table align="center">
                <h1 class="h" align="center">Member Login</h1>
                <?php echo $err_db ?>
                
                <?php
                    if(isset($err_massage))
                    {
                      echo '<tr><td>'.$err_massage.'</td></tr>';
                    }
                ?>
                <tr>
                  <td ><b class="h">Username</b></td>
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
                  <tr class="errname"><td></td></tr>
                  </td>                  

                </tr>

                <tr>
                  <td><b class="h">Password</b></td>
                </tr>
                <tr>
                  <td>
                    <input type="password" name="Password" placeholder="Enter Your Password" value="<?php echo $password;?>"/>
                    <?php
                    if(isset($err_password))
                    {
                      echo '<tr><td>'.$err_password.'</td></tr>';
                    }
                    ?><br><br>
                    <tr class="errpass"><td></td></tr>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" align="center">
                    <input class="commonButton" type="submit" value="Login" name="Button_LogIn" />
                  </td>
                </tr>
                <tr>
                  <td align="center">
                  <a class="h" href="" >Forgotten password</a>
                  </td>                  
                </tr>
                <tr>
                  <td class="h" colspan="2">Don't have and account?<a class="h" href="sign_up.php" >Sign Up</a><br><br><br><br><br>
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
    const username = document.getElementsByName("username")[0]
    const password = document.getElementsByName("Password")[0]

    document.getElementById("loginform").addEventListener("submit", e => {
      
      document.querySelectorAll(".errname td")[0].innerText = ""
      document.querySelectorAll(".errpass td")[0].innerText = ""

  if(username.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errname td")[0].innerText = "Input required"
      } 
      else if(username.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".errname td")[0].innerText = "required atlest 5 character"
      } 

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
