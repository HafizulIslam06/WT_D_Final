<?php
    include_once 'admin_header.php';
    include_once 'category_header.php';
    include 'Controllers/CategoryController.php';
?>

<html>
	<body>
        <?php echo $err_db ?>
		<form id="categoryform" align="center" method="post" action="">
		<fieldset>
			<table align="center">
			<h3>Add Catagory</h3>
				<tr>
				<td>Name</td>
					<td>
						<input type="text"  name="name" value=""/>
                        <?php
                            if(isset($err_name))
                            {                                   
                            echo '<tr><td>'.$err_name.'</td></tr>';
                            }
                        ?>	
						<tr class="name"><td></td></tr>					
					</td> 
				</tr>
				
				<tr align="center">
					<td colspan="2">
                         <input class="commonButton" type="submit" name="add_category" value="Add Catagory"> 
                    </td>					
				</tr>
			</table>
		</fieldset>
		</form>
	</body>

<script>
    const name = document.getElementsByName("name")[0]

    document.getElementById("categoryform").addEventListener("submit", e => {
      if(name.value.length === 0 ) {
        e.preventDefault()
        document.querySelectorAll(".name td")[0].innerText = "Input required"
      } 
      else if(name.value.length < 5) {
        e.preventDefault()
        document.querySelectorAll(".name td")[0].innerText = "required atlest 5 character"
      } 
    })
</script>
</html>