 function isValid(pForm) {

	const fnameMsg = document.getElementById("fname_error_msg");
	const lnameMsg = document.getElementById("lname_error_msg");
	const emailMsg = document.getElementById("email_error_msg");
	const passwordMsg = document.getElementById("password_error_msg");
	const confirmPasswordMsg = document.getElementById("confirmPassword_error_msg");

	fnameMsg.innerHTML = "";
	lnameMsg.innerHTML = "";
	emailMsg.innerHTML = "";
	passwordMsg.innerHTML = "";
	confirmPasswordMsg.innerHTML = "";

	let flag = true;
	const pattern =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

	if (pForm.fname.value === "") {
		fnameMsg.innerHTML = "First name cannot be empty (JS)";
		flag = false;
	}
	if (pForm.lname.value === "") {
		lnameMsg.innerHTML = "Last name cannot be empty (JS)";
		flag = false;
	}
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
	if (pForm.password.value === "") {
		confirmPasswordMsg.innerHTML = "Confirm password cannot be empty (JS)";
		flag = false;
	}	
	

	if (!flag) return false;
	return true;

}