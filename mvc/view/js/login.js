function isValid(pForm) {
	console.log(pForm.action);
	console.log(pForm.email.value);
	console.log(pForm.password.value);

	if (pForm.email.value === "" && pForm.password.value === "") {
		console.log("Please fill up the form properly");
		return false;
	}

}