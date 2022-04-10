var form = document.querySelector("form");


form.addEventListener("submit", function (verification) {
		var nom = form.elements.nom.value;
		var email = form.elements.email.value;
		var message = form.elements.message.value;
		if (nom.length <= 1 || email.length <= 1 || message.length <= 1) {
			document.getElementById("verification").textContent = "Veuillez entrer des informations valides";
			verification.preventDefault();
		} else {
			document.getElementById("verification").textContent = "Merci de nous avoir écris";
		}
	}



)
document.getElementById("nom").addEventListener("blur", function (verificationNom) {
	var name = verificationNom.target.value;
	if (name.length <= 1) {
		document.getElementById("nomAide").textContent = "*Nom trop court";
	}
	else
	{
		document.getElementById("nomAide").textContent = "";
	}
})
document.getElementById("email").addEventListener("blur", function (verificationEmail) {
	var regex = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
	var mail = verificationEmail.target.value;
	if (!regex.test(mail)) {
		document.getElementById("emailAide").textContent = "*Adresse e-mail invalide";
	}
	else
		{
			document.getElementById("emailAide").textContent = "";
		}
})
document.getElementById("message").addEventListener("input", function (verificationMessage) {
	var test = verificationMessage.target.value;
	if(test.length <= 15) {
		document.getElementById("messageAide").textContent = "*Texte trop court";
	}
	else
		{
			document.getElementById("messageAide").textContent = "";
		}
})
