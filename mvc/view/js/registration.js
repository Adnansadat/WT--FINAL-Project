function isValid(pForm) {
	console.log(pForm.action);
	console.log(pForm.fname.value);
	console.log(pForm.lname.value);
	console.log(pForm.email.value);
	console.log(pForm.password.value);
	console.log(pForm.confirmpassword.value);

	if (pForm.email.value === "" && pForm.fname.value === "" && pForm.lname.value === "" 
		&& pForm.password.value === "" && pForm.confirmpassword.value === "") {
		console.log("Please fill up the form properly");
		return false;
	}

}