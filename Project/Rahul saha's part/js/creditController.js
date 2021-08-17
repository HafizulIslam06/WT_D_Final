<script>
      var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
	 function validate(){
			refresh();
			if(get("fname").value == ""){
				hasError = true;
				get("err_fname").innerHTML = "*Name Required";
			}
			else if(get("fname").value.length <=2){
				hasError = true;
				get("err_fname").innerHTML = "*Name must be > 2 characters";
			}
			if(get("number").value==""){
				hasError = true;
				get("err_number").innerHTML = "*Number Required";
			}
			if(get("email").value==""){
				hasError = true;
				get("err_email").innerHTML = "*Email Required";
			}
			if(get("pass").value==""){
				hasError = true;
				get("err_pass").innerHTML = "*pass Required";
			}
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_name").innerHTML ="";
			get("err_number").innerHTML ="";
			get("err_email").innerHTML ="";
			get("err_saddress").innerHTML ="";
			get("err_city").innerHTML ="";
			get("err_postal").innerHTML ="";
			get("err_state").innerHTML ="";
			get("err_pass").innerHTML ="";
			

		}
</script>