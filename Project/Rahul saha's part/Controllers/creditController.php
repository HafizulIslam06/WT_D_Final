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
	$email="";
	$err_email="";
	$gender="";
	$err_gender="";
	$saddress="";
	$err_saddress="";
	$city="";
	$err_city="";
	$postal="";
	$err_postal="";
	$state="";
	$err_state="";
	$pass="";
	$err_pass="";
	
	
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
	        $err_phone="Phone number Required";
        }
		else{
			$number = $_POST["number"];
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "*email Required";
		}
		else if(strpos($_POST["email"],"@.")){
            $hasError=true;
			$err_email="Email must contain @ and .";
		 }
		else{
			$email = $_POST["email"];
		}
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass="*Password Required";
		}
		else{
			$pass = $_POST["pass"];
		}
		
		if(!$hasError){

			header('location:Thanks.php');
			

		}
		
	}
?>	
	