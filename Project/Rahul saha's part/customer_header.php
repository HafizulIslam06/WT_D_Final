<?php session_start();
      if(!isset($_SESSION["loggeduser"])){
		  header("Location: login.php");
	  }
 ?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">Welcome <?php echo $_SESSION["loggeduser"];?></h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="Homepage.php" class="btn btn-primary">Homepage</a>	
			<a href="update.php" class="btn btn-info">Update Profile</a>				
			<a href="About.php" class="btn btn-danger">About Us</a>
			<a href="Review.php" class="btn btn-info">Review us</a>
			<a href="login.php" class="btn btn-danger">Logout</a>		
		</div> 
		
		<!--menu ends-->