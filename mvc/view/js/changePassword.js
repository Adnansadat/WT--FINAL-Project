function isValid(pForm) {

	const emailMsg = document.getElementById("email_error_msg");
	const currentPasswordMsg = document.getElementById("currentPassword_error_msg");
	const newPasswordMsg = document.getElementById("newPassword_error_msg");
	const reTypePasswordMsg = document.getElementById("reTypePassword_error_msg");

	emailMsg.innerHTML = "";
	newPasswordMsg.innerHTML = "";
	currentPasswordMsg.innerHTML = "";
	reTypePasswordMsg.innerHTML = "";

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
	if (pForm.currentPassword.value === "") {
		currentPasswordMsg.innerHTML = "Field cannot be empty (JS)";
		flag = false;
	}
	if (pForm.newPassword.value === "") {
		newPasswordMsg.innerHTML = "Field cannot be empty (JS)";
		flag = false;
	}
	if (pForm.reTypepassword.value === "") {
		reTypepasswordMsg.innerHTML = "Field cannot be empty (JS)";
		flag = false;
	}	
	

	if (!flag) return false;
	return true;

}