<script>
      var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
	 function validate(){
			refresh();
			if(get("name").value == ""){
				hasError = true;
				get("err_name").innerHTML = "*Name Req";
			}
			else if(get("name").value.length <=2){
				hasError = true;
				get("err_name").innerHTML = "*Name must be > 2 characters";
			}
			if(get("number").value==""){
				hasError = true;
				get("err_number").innerHTML = "*Number Req";
			}
			if(get("email").value==""){
				hasError = true;
				get("err_email").innerHTML = "*Email Req";
			}
			if(get("saddress").value==""){
				hasError = true;
				get("err_saddress").innerHTML = "*Street Req";
			}
			if(get("city").value==""){
				hasError = true;
				get("err_city").innerHTML = "*City Req";
			}
			if(get("postal").value==""){
				hasError = true;
				get("err_postal").innerHTML = "*Postal Req";
			}
			if(get("state").value==""){
				hasError = true;
				get("err_state").innerHTML = "*State Req";
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

		}
</script>