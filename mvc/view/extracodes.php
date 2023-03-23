<img src="header.jpg" alt="Vote" style="width:600px;height:200px;">
<a href="http://localhost/mvc/controller/logoutAction.php">Logout</a>

div 
		{
		  background-color: lightgrey;
		  width: 300px;
		  border: 15px solid green;
		  padding: 50px;
		  margin: 20px;
		}
	#rcorners 
		{
		  border-radius: 100px;
		  border: 2px solid #73AD21;
		  padding: 20px; 
		  width: 550px;
		  height: 300px;  
		}
		id="rcorners"

		#708090


		function isValid(pForm) {

	const emailMsg = document.getElementById("email_error_msg");
	const passwordMsg = document.getElementById("password_error_msg");

	emailMsg.innerHTML = "";
	passwordMsg.innerHTML = "";

	let flag = true;
	const pattern =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

	if (pForm.email.value === "") {
		emailMsg.innerHTML = "Email cannot be empty (JS)";
		flag = false;
	}
	else {
		if (!pattern.test(pForm.email.value)) {
			emailMsg.innerHTML = "Email is not in correct format (JS)";
			flag = false;
		}
	}
	if (pForm.password.value === "") {
		passwordMsg.innerHTML = "Password cannot be empty (JS)";
		flag = false;
	}	

	if (!flag) return false;
	return true;

}