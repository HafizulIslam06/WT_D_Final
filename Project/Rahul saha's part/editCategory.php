  
<?php
    include_once 'admin_header.php';    
    include_once 'category_header.php';
    include 'Controllers/CategoryController.php';
	$id=$_GET["id"];
	$c=getCategory($id);
    
?>
<html>
	<head></head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table align="center">
			<td><input type="hidden" name="id" value="<?php echo $c["id"]; ?>"></td>
			<td>  <b>Edit Catagory </b></td>
				<tr>
					<td>Name</td>
					<td>
						 <input type="text" name="name" value="<?php echo $c["name"]; ?>" > 
					<?php
						if(isset($err_name))
						{                                   
						echo '<tr><td>'.$err_name.'</td></tr>';
						}
                    ?>
					</td>
					 
				</tr>
				
				
				<tr>
					<td><input class="commonButton" type="submit" name="edit_category" value="Edit Catagory"> </td>
					
				</tr>
				</table>			
		</fieldset>
		</form>
	</body>
</html>