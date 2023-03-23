function isValid(pForm) {

	const fnameMsg = document.getElementById("fname_error_msg");
	const lnameMsg = document.getElementById("lname_error_msg");
	const postcodeMsg = document.getElementById("postcode_error_msg");
	const emailMsg = document.getElementById("email_error_msg");
	const passwordMsg = document.getElementById("password_error_msg");
	

	fnameMsg.innerHTML = "";
	lnameMsg.innerHTML = "";
	postcodeMsg.innerHTML = "";
	emailMsg.innerHTML = "";
	passwordMsg.innerHTML = "";
	
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
	if (pForm.postcode.value === "") {
		postcodeMsg.innerHTML = "Postcode cannot be empty (JS)";
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
	

	if (!flag) return false;
	return true;

}