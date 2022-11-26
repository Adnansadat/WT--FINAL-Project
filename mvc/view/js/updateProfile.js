function isValid(pForm) {
	console.log(pForm.action);
	console.log(pForm.fname.value);
	console.log(pForm.lname.value);
	console.log(pForm.postCode.value);
	console.log(pForm.password.value);

	if (pForm.fname.value === "" && pForm.lname.value === "" && pForm.postCode.value === ""
		&& pForm.password.value === "") {
		console.log("Please fill up the form properly");
		return false;
	}

}