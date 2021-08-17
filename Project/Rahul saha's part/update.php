<?php
      require 'Controllers/updateController.php';
      require'js/jsController.js'; 
	  
?>



<html>
 
    <head>
	</head>
    <table align="center" width="50%">
        <tr>
            <td>
			
                <body background="Homepage.png" style="background-size: 100% 100%">
                    <form action="" onsubmit="return validate()" method="post">
                        <fieldset>
                        <table>
		 <fieldset align="center">
	     <h2><u>Update Info</u></h2>
	     </fieldset>
		     <tr>
			   <td>Name:</td>
			   <td><input id="name" name="name" placeholder="Your Name"  value="<?php echo $name;?>" type="text" <br>
			   <span id="err_name"> <?php echo $err_name;?> </span></td>
			   
			 </tr>
			 <tr>
			   <td>Number:</td>
			   <td><input id="number" name="number" placeholder="+880" value="<?php echo $number; ?>" type="text"<br>
			       <span id="err_number"> <?php echo $err_number;?> </span></td>
			 </tr>
			 <tr>
			   <td>Email:</td>
			   <td><input id="email" type="text" name="email" placeholder="name@gmail.com" value="<?php echo $email; ?>" <br>
			       <span id="err_email"> <?php echo $err_email;?> </span></td>
			 </tr>
			 	
			 <tr>
			   <td>Delivery Address:</td>
			   <td><input id="saddress" type="text" placeholder="street address" name="saddress" value="<?php echo $saddress;?>"<br>
			       <span id="err_saddress"><?php echo $err_saddress;?> </span></td>
			 </tr>
			 <tr>
			   <td></td>
			   <td><input id="city" type="text" placeholder="City" name="city" value="<?php echo $city;?>"<br>
			       <span id="err_city"><?php echo $err_city;?> </span></td>
			    <td><input id="state" type="text" placeholder="state" name="state" value="<?php echo $state;?>"<br>
			       <span id="err_state"><?php echo $err_state;?> </span></td>	   
			 </tr>
			 <tr>
			   <td></td>
			   <td><input id="postal" type="text" placeholder="Postal/Zip+" Code name="postal" value="<?php echo $postal;?>"<br>
			       <span id="err_postal"><?php echo $err_postal;?> </span></td>
			<tr>
			<td colspan="1" align="right" ><input type="submit"  value="Save" ></td>		
			</tr>
		 </table>
                        </fieldset>
                    </form>
                </body>
            </td>    
        </tr>
    </table>  
</html>