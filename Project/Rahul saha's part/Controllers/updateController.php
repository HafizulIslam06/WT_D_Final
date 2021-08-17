 <?php
     
	 include'models/db_config.php';
	
 
    $name="";
	$err_name="";
	
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
	
	$hasError=false;
	

	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=2){
			$hasError = true;
			$err_name = "Name must be greater than 2 characters";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(empty($_POST["number"])){
			$hasError = true;
			$err_number="Number Required";
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
			$err_email = "email Required";
		}
		else if(strpos($_POST["email"],"@.")){
            $hasError=true;
			$err_email="Email must contain @ and .";
		 }
		else{
			$email = $_POST["email"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(empty($_POST["saddress"])){
			$hasError = true;
			$err_saddress="street Required";
		}
		else{
			$street = $_POST["saddress"];
		}
		if(empty($_POST["city"])){
			$hasError = true;
			$err_city="city Required";
		}
		else{
			$City = $_POST["city"];
		}
		
		if(empty($_POST["state"])){
			$hasError = true;
			$err_state="State Required";
		}
		
		else{
			$state = $_POST["state"];
		}
		
		if(empty($_POST["postal"])){
			$hasError = true;
			$err_postal="Postal code or zip Required";
		}
		
		else{
			$postal = $_POST["postal"];
		}
		
		
		
		if(!$hasError){

			header('location:Homepage.php');
			

		}
		
		function insertUser($name,$number,$email,$saddress,$city,$state,$postal){
		$query = "insert into update values (NULL,'$name','$number','$saddress','$city','$state','$postal')";
		return execute($query);
		
	}
	}
	
	?>