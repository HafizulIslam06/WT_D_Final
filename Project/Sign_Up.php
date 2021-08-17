<?php
    include 'header.php';
    include 'controllers/UserController.php';    
?>

<html>
    <head></head>
    <table align="center" width="30%">
        <tr>
            <td>
                <body background="Homepage.png" style="background-size: 100% 100%">
                    <form id="signupform" action="" method="POST">
                        <fieldset>
                        <legend align="center">
                        <img src="Login & signup.png" style="width: 150px; height: 150px"/>
                        </legend>
                            <table align="center">
                                <h1 class="h" align="center">Sign Up</h1>
                                <?php echo $err_db ?>

                                <tr>
                                <td ><b class="h">Username</b></td>                                                  
                                </tr>
                                <tr>
                                <td ><input class="label" type="text" name="username" placeholder="Enter Your Username" value="<?php echo $username;?>"/>
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
                                <td ><b class="h">Email Address</b></td>                                                  
                                </tr>
                                <tr>
                                <td><input type="text" name="email" placeholder="Enter Your Email" value="<?php echo $email;?>"/>
                                <?php
                                if(isset($err_email))
                                {                                   
                                echo '<tr><td >'.$err_email.'</td></tr>';
                                }
                                ?>
                                <tr class="erremail"><td></td></tr>
                                </td>
                                </tr>
                                
                                <tr>
                                <td ><b class="h">Gender</b></td>                                                  
                                </tr>
                                <tr>
                                <td class="h">
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
                                <td ><b class="h">Password</b></td>                    
                                </tr>
                                <tr>
                                <td><input type="text" name="Password" placeholder="Enter Your Password" value="<?php echo $password;?>"/>
                                <?php
                                if(isset($err_password))
                                {                                   
                                echo '<tr><td >'.$err_password.'</td></tr>';
                                }
                                ?>
                                <tr class="errpass"><td></td></tr>
                                </td>
                                </tr>

                                <tr>
                                <td ><b class="h"> Confirm Password</b></td>                    
                                </tr>
                                <tr>
                                <td><input type="text" name="Confirm_Password" placeholder="Re-enter Your Password" value="<?php echo $confirm_password;?>"/>
                                <?php
                                if(isset($err_confirm_password))
                                {                                   
                                echo '<tr><td >'.$err_confirm_password.'</td></tr>';
                                }
                                ?>
                                <tr class="errpass2"><td></td></tr><br><br>
                                </td>
                                </tr>

                                <tr>
                                <td colspan="2" align="center"><input class="commonButton" type="submit" name="Button_SignUp" value="Sign Up"/></td>
                                </tr>

                                <tr>
                                <td class="h" colspan="2" align="center" >
                                By clicking the sign up button,you agree to our<br>
                                <a class="h" href="terms_conditions.php" >Terms & Conditions</a>
                                and
                                <a class="h" href="privacy_policy.php" >Privacy Policy</a>
                                </td>                                                
                                </tr> 

                                <tr>
                                <td class="h" colspan="2" align="center" >
                                    Have an account?<a class="h" href="Login.php" 
                                    >Sign in</a
                                    ><br><br><br><br>
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
    const email = document.getElementsByName("email")[0]
    const pass = document.getElementsByName("Password")[0]
    const pass2 = document.getElementsByName("Confirm_Password")[0]

    document.getElementById("signupform").addEventListener("submit", e => {

      document.querySelectorAll(".errname td")[0].innerText = ""
      document.querySelectorAll(".erremail td")[0].innerText = ""
      document.querySelectorAll(".errpass td")[0].innerText = ""
      document.querySelectorAll(".errpass2 td")[0].innerText = ""
      //username
      if(username.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errname td")[0].innerText = "Input required"
      } 
      else if(username.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".errname td")[0].innerText = "required atlest 5 character"
      } 

      //email
      if(email.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".erremail td")[0].innerText = "Input required"
      } 
      else if(email.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".erremail td")[0].innerText = "required atlest 5 character"
      }
      

      //password
      if(pass.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errpass td")[0].innerText = "Input required"
      } 
      else if(pass.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".errpass td")[0].innerText = "required atlest 5 character"
      } 

      //password2
      if(pass2.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".errpass2 td")[0].innerText = "Input required"
      } 
      else if(pass2.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".errpass2 td")[0].innerText = "required atlest 5 character"
      } 
    })
</script>

</html>