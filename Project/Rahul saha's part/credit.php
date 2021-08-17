<?php

require 'Controllers/creditController.php';
require 'js/creditController.js';
 
?>


<html>
    <head></head>
    <table align="center" width="50%">
        <tr>
            <td>
                <body background="Homepage.png" style="background-size: 100% 100%">
                    <form action="" onsubmit="return validate()" method="POST">
                        <fieldset>
                        <table>
		 <fieldset align="center">
	     <h2><u><button id="btn _g" onclick="viewGForm()">Via Debit/Credit Card</button>
    <form id="g_form" style="display:none;"></u></h2>
	     </fieldset>
		 
		     <tr>
			   <td>Name:</td>
			   <td><input id="name" type="text" placeholder="First Name" name="fname" value="<?php echo $fname;?>"<br>
			   <span id="err_name"> <?php echo $err_fname;?> </span></td>
			   
			 </tr>
			 <tr>
			   <td>Credit/Debit:</td>
			   <td><input id="number" type="text" name="number" placeholder="Card Number" value="<?php echo $number; ?>"<br>
			       <span id="err_number"> <?php echo $err_number;?> </span></td>
			 </tr>
			 <tr>
			   <td>Email:</td>
			   <td><input id="email" type="text" name="email" placeholder="name@gmail.com" value="<?php echo $email; ?>" <br>
			       <span id="err_email"> <?php echo $err_email;?> </span></td>
			 </tr>
			 <tr>
			   <td>Password:</td>
			   <td><input id="pass" type="password" name="pass" placeholder="Security Number" value="<?php echo $pass; ?>"<br>
			       <span id="err_pass"> <?php echo $err_pass;?> </span></td>
			 </tr>
			<tr>
			<td colspan="1" align="right" ><input type="submit" name="submit" value="Confirm" ></td>		
			</tr>
			</form>
		 </table>
           </fieldset>
          </form>
			
		</div> 
              </body>
            </td>    
        </tr>
    </table>  
</html>