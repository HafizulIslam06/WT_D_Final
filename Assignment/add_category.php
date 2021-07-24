  
<?php
    include 'header.php';
    include 'Controllers/categoryControler.php';
?>

<html>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td> Add Catagory </td>
				<tr>
				<td>Name</td>
					<td>
						<input type="text"  name="name" value="<?php echo $name;?>"/>
						<?php
						if(isset($err_name))
						{                                   
						echo '<tr><td>'.$err_name.'</td></tr>';
						}
					?>
					</td> 
				</tr>
				
				<tr>
					<td > <input type="submit" name="add_category" value="Add Catagory"> </td>
					
				</tr>
				</table>

		</fieldset>
		</form>
	</body>
</html>
<?php include 'footer.php'; ?>