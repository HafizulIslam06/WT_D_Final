<?php session_start();
      if(!isset($_SESSION["loggeduser"])){
		  header("Location: login.php");
	  }
 ?>

<?php

	  
	$fname="";
	$err_fname="";

	$number="";
	$err_number="";
	
	
	
	$hasError=false;
	

	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["fname"])){
			$hasError=true;
			$err_fname="*Name Required";
		}
		elseif (strlen($_POST["fname"]) <=2){
			$hasError = true;
			$err_fname = "Name must be greater than 2 characters";
		}
		else
		{
			$fname = $_POST["fname"];
		}

		if(empty($_POST["number"])){
			$hasError = true;
			$err_number="*Number Required";
		}
		else if(!is_numeric($_POST["number"])){
	        $hasError = true;
	        $err_phone="*Phone number Required";
        }
		else{
			$number = $_POST["number"];
		}
		
		if(!$hasError){

			header('location:Thanks.php');
			

		}
		
	}
	
?>