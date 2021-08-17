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
			<h1 class="header">How can you like to pay?</h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="credit.php" class="btn btn-primary">Debit/Credit Card</a>		
			<a href="cdm.php" class="btn btn-danger">Cash On Delivey</a>
			
		</div> 