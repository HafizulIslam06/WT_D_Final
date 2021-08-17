<?php session_start();
      if(!isset($_SESSION["loggeduser"])){
		  header("Location: login.php");
	  }
 ?>

<html>
   <body>
      <form>
	     <table>
		    <tr><h2>
			Please Submit your experience About us!
			</tr>
			<tr> 
			<td>Comments:</td>
			<td><textarea placeholder="write your opinion..."></textarea></td>
			<td align="center"></td>
			</tr>
			<tr>
			<td colspan="1" align="right" ><input type="submit" name="submit" value="Submit" ></td>		
			</tr>
			
		 
		 </table>	
	  </form>
   </body>


</html>