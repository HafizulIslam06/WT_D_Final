<?php
    include 'header.php';
    include 'controllers/categoryControler.php';
	$categories=getAllCategories();    
?>

<html>
	<h3 align="center">All Categories</h3>
	<table align="center">
        <tr>
            <td>Sl#</td>
            <td>Name</td>
            <td>Product Count</td>
        </tr>
	 
	<?php 
	$i=1;
	foreach($categories as $c){
		$id=$c["id"];
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$c["name"]."</td>";
		   echo '<td><a href="Edit_Category.php?id='.$id.'">Edit</a></td>';
		  echo '<td><a>Delete</a></td>';
		  echo "</tr>";
		  $i++;
	} 
	?>

	</table>
	</body>
</html>
 <?php include 'footer.php';?> 