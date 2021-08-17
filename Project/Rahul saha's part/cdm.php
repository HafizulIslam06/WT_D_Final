<?php require'Controllers/cdmController.php';
      require'js/jsController.js';

 ?>


<html>
    <head></head>
    <table align="center" width="50%">
        <tr>
            <td>
                <body background="Homepage.png" style="background-size: 100% 100%">
                    <form action="" method="POST">
                        <fieldset>
                        <table>
		 <fieldset align="center">
	     <h2><u><button id="btn _g" onclick="viewGForm()">Cash On Delivery</button>
    <form id="g_form" style="display:none;"></u></h2>
	     </fieldset>
		 
		     <tr>
			   <td>Name:</td>
			   <td><input type="text" placeholder="First Name" name="fname" value="<?php echo $fname;?>"
			   <span> <?php echo $err_fname;?> </span></td>
			   </tr>
		
			 <tr>
			   <td>Number:</td>
			   <td><input type="text" name="number" placeholder="Phone Number" value="<?php echo $number; ?>"
			       <span> <?php echo $err_number;?> </span></td>
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