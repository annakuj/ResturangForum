function validateForm() {

	var email = document.forms["inputForm"]["email"].value;
	var trimedEmail = email.replace(/\s/g,'');
	
	var password = document.forms["inputForm"]["password"].value;
	var trimedPassword = story.replace(/\s/g,'');
	
	var containingEmail = email.includes("@");
	
	if (trimedEmail == "" | trimedPassword == "") { //Checks so no forms are empty (or only filled with spaces)
		alert("Make sure all fields are filled in");
		return false;
	}
	else if(!containingEmail){//Checks if the email-address contains a @
		alert("Fill in a correct email-address");
		return false;
	}
	else if(containingEmail){
		var position = email.indexOf("@"); //Gets the position of @
		var containingDot = email.includes(".", position);//Checks if there is a dot after the @
		if(!containingDot){
			alert("Fill in a correct email-address");
			return false;
		}
	}
}