<?php
	include 'models/db_config.php';
	
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$pass="";
	$err_pass="";
	
	$err_db="";
	$hasError=false;
	
	/////signup page//////////////////////////
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$hasError  = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["uname"])){
			$hasError  = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["uname"];
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
			$hasError  = true;
			$err_pass = "pass Required";
		}
		else{
			$pass = $_POST["pass"];
		}
		if(!$hasError){
			$rs = insertUser($name,$uname,$_POST["email"],$_POST["pass"]);
			if($rs === true){
				header("Location: LL.php");
			}
			$err_db = $rs;
		}
	}
	
	//login page///////////////////////////////////////
	elseif(isset($_POST["btn_login"])){
		
		if(empty($_POST["uname"])){
			$hasError  = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$hasError  = true;
			$err_pass = "Password Required";
		}
		else{
			$pass = $_POST["pass"];
		}
		//do others
		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				header("Location: Homepage.php");
			}
			$err_db  = "Username and password invalid";
		}
		if(!$hasError){
			foreach($uname as $u=>$p){
				if($uname == $u && $pass==$p){
					$_SESSION["loggeduser"] = $uname;
					//setcookie("loggeduser",$uname,time()+120);
					header("Location: Homepage.php");
				}
			}
			echo "invalid username";
		}
		
		
		
	}
	function insertUser($name,$uname,$email,$pass){
		$query = "insert into pro values (NULL,'$name','$uname','$email','$pass')";
		return execute($query);
		
	}
	function authenticateUser($uname,$pass){
		$query = "select * from pro where uname='$uname' and pass='$pass'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
		

		
	
	function checkUsername($uname){
		$query = "select name from pro where username='$uname'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
?>