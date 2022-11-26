function isValid(pForm) {
	console.log(pForm.action);
	console.log(pForm.email.value);
	console.log(pForm.currentPassword.value);
	console.log(pForm.newPassword.value);
	console.log(pForm.reTypePassword.value);

	if (pForm.email.value === "" && pForm.newPassword.value === "" && 
		pForm.reTypePassword.value === "" && pForm.currentPassword.value === "") {
		console.log("Please fill up the form properly");
		return false;
	}

}