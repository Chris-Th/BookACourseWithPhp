	/*function validateForm() {
    let fName = document.getElementById("fName"); console.log(fName);
    let lName = document.getElementById("lName");
    let street = document.getElementById("street");
    let streetNr = document.getElementById("streetNr");
    let plz = document.getElementById("plz");
    let ort = document.getElementById("ort");
    let telG = document.getElementById("telG");
    let telP = document.getElementById("telP");
    let email = document.getElementById("email");
    let birthdate = document.getElementById("birthdate");
    let agbCheck = document.getElementById("agbCheck");
    let versJa = document.getElementById("versJa");
    let versNein = document.getElementById("versNein"); 
*/
		//===================Versuch nach Chris=================
	function validateForm() {

		if (!validateFirstName()) return false;
		if (!validateLastName()) return false;
		if (!validateStreet()) return false;
		if (!validateStreetNr()) return false;
		if (!validateNrAdd()) return false;
		if (!validatePlz()) return false;
		if (!validateOrt()) return false;
		if (!validateTelG()) return false;
		if (!validateTelP()) return false;
		if (!validateEmail()) return false;
		if (!validateBirthdate()) return false;
		if (!validateAgbCheck()) return false;
		if (!validateVers()) return false;

		
		return true;
	}

	const letters = /^[A-Za-z]+$/;
	const oneLetter = /^[A-Za-z]{1}$/;
	const numbers = /^[0-9]+$/;
	const fourDigits = /^[0-9]{4}$/;
	const telInt = /^\+?([0-9]{2})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{3})[-. ]?([0-9]{2})[-. ]?([0-9]{2})$/;
	const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	//function setLocalStorage(key, value) {
	//	localStorage.setItem(key, value);
	//}

	function validateFirstName() {
		let inputElement = document.getElementById("fname");
    	let value = inputElement.value;

		if (!value) {
			alert("Bitte Vornamen eingeben");
			return false;
			} else if (!value.match(letters)) {
				alert("Bitte beim Vornamen nur Buchstaben eingeben.");
				return false;
			} else {
				setLocalStorage("fname", value);
				console.log(value);
				return true;
			}
	}

	function validateLastName() {
		let inputElement = document.getElementById("lname");
    	let value = inputElement.value;

		if (!value) {
			// leerer String
			alert("Bitte Nachnamen eingeben");
			return false;
		}
			// nicht leerer String
			else if (!value.match(letters)) {
				alert("Bitte beim Nachnamen nur Buchstaben eingeben.");
				return false;
			} else {
				setLocalStorage("lname", value);
				console.log(value);
				return true;
			}
	}

	function validateStreet() {
		let inputElement = document.getElementById("street");
    	let value = inputElement.value;

		if (!value) {
			// leerer String
			alert("Bitte Strassennamen eingeben.");
			return false;
		} else {
			setLocalStorage("street", value);
			console.log(value)
			return true
		}
	}

	function validateStreetNr() {
		let inputElement = document.getElementById("streetNr");
    	let value = inputElement.value;

		if (!value) {
			alert("Bitte die Hausnummer eingeben.");
			return false;
		} else if (!value.match(numbers)) {
			alert('Im Feld "Hausnummer" sind nur Nummern erlaubt. Ein Buchstaben-Zusatz kann im Feld "Zusatz" eingegeben werden.');
			return false;
		} else {
			setLocalStorage("streetNr", value);
			console.log(value);
			return true;
		}
	}

	function validateNrAdd() {
		let inputElement = document.getElementById("nrAdd");
    let value = inputElement.value;

		if (!value) {
			return true;
		} else if (!value.match(oneLetter)) {
			alert('Im Feld "Zusatz" bitte einen einstelligen Buchstabenzusatz eingeben oder das Feld leer lassen.');
			return false;
		} else {
			setLocalStorage("nrAdd", value);
			console.log(value);
			return true;
		}
	}

	function validatePlz() {
		let inputElement = document.getElementById("plz");
    	let value = inputElement.value;

		if (!value.match(fourDigits)) {
			alert('Bitte im Feld "PLZ" eine in der Schweiz gültige Postleitzahl (vierstellige Zahl) eingeben.');
			return false;
		} else {
			setLocalStorage("plz", value);
			console.log(value);
			return true;
		}
	}

	function validateOrt() {
		let inputElement = document.getElementById("ort");
    	let value = inputElement.value;

		if (!value) {
			// leerer String
			alert('Im Feld "Wohnort" bitte Ortsnamen eingeben.');
			return false;
		} else {
			setLocalStorage("ort", value);
			console.log(value);
			return true;
		}
	}


	

	function validateTelP() {
		let inputElement = document.getElementById("telP");
    	let value = inputElement.value;

		if (!value.match(telInt)) {
			alert('Bitte Ihre Rufnummer mit Ländercode im internationalen Format (+12 34 567 89 01) eingeben.')
			return false
		} else {
			setLocalStorage("telP", value);
			console.log(value);
			return true;
		}
	}

	function validateTelG() {
		let inputElement = document.getElementById("telG");
    	let value = inputElement.value;
		if (!value) {
			return true
		} else if (!value.match(telInt)) {
			alert('Bitte Ihre Rufnummer mit Ländercode im internationalen Format (+12 34 567 89 01) eingeben.')
			return false
		} else {
			setLocalStorage("telG", value);
			console.log(value);
			return true;
		}
	}

	function validateEmail() {
		let inputElement = document.getElementById("email");
		let value = inputElement.value;

		if (!value) {
			alert('Bitte Emailadresse angeben');
			return false;
		} else if (!value.match(emailRegex)) {
			alert('Korrigieren Sie bitte das Format der Email-Adresse');
			return false;
		} else {
			setLocalStorage("email", value);
			console.log(value);
			return true;
		}
	}

	function validateBirthdate() {
		let inputElement = document.getElementById("birthdate");
		let value = inputElement.value;

		if (!value) {
			alert('Bitte Geburtsdatum angeben')
			return false;
		} else {
			setLocalStorage("birthdate", value);
			console.log(value);
			return true;
		}
	}

	/*function validateAgbCheck() {
		let inputElement = document.getElementById("agbCheck").checked;
		let value = inputElement.value;

		if (!value) {
			alert("Bitte klicken Sie in die Checkbox, um zu bestätigen, dass Sie die Allgemeinen Geschäftsbedingungen gelesen und verstanden haben.");
			return false;
		} else {
			setLocalStorage("agbCheck", value);
			console.log(value);
			return true;
		}
	} */

	function validateVers() {
		let checkedJa = document.getElementById("versJa").checked;
		let checkedNein = document.getElementById("versNein").checked;
		
		if (checkedJa) {
			setLocalStorage("versicherung", "eine Versicherung");
			let ja = "versJa";
			console.log(ja);
			return true;
		} 
		else if (checkedNein) {
			setLocalStorage("versicherung", "keine Versicherung");
			let nein = "versNein";
			console.log(nein);
			return true;
		} 
		else {
			alert('Bitte bei "Annulationsversicherung" "ja" oder "nein" auswählen.')
			return false;
		}
		

	}
	
	
	/*function validateRadios() {
		let radioValues = document.getElementsByName("vers");
		let radio = radioValues.value;

		for (let i = 0; i < radios.length, i++) {
			if (radio[i].checked) {
				console.log(radio[i].value);
				return radio[i].value
			}
		}
	}

	/*function validateInsRadioBtns() {
		let inputElementJa = document.getElementById("versJa");
		let jaValue = inputElementJa.value;
		let inputElementNein = document.getElementById("versNein");
		let neinValue = inputElementNein.value;

		function validateVersJa() {
			if (!jaValue) {
				return false
			}
		}
		if (!jaValue) {
			return false;
		} else if (!neinValue) {
			alert('Bitte durch klicken auf "ja" oder "nein" angeben, ob Sie eine Anulationsversicherung abgeschlossen haben')
		}
	}




		//============== Versuch nach w3-Beispiel================
		/*
if(fNameValidation(fName)) {
	if(lNameValidation(lName)) {
	/*	if(streetValidation(street)) {
			if(streetNrValidation(streetNr)) {
				if
			}
		} 
	}
}
return false;
}

function fNameValidation(fName) {

	var letters = /^[A-Za-z]+$/;

	dfdfif(fName.value.match(letters)) {

		return true;

	} else {

		alert("Bitte Vornamen eingeben. Es sind nur Buchstaben erlaubt.")
		fName.focus();
		return false;

	}
}

function lNameValidation(lName) {

	var letters = /^[A-Za-z]+$/;
	if(lName.value.match(letters)) {

		return true;

	} else {

		alert("Bitte Nachnamen eingeben. Es sind nur Buchstaben erlaubt.")
		lName.focus();
		return false;

	}
}

/*
function bookingForm() {
    // return validFName(); validLName(); validStreet(); etc.
}
    var fName = document.getElementById("fName").value

    function validFName(fName) {
        if (fName.value.length == 0) {
            alert("Vorname ist Pflichtfeld");
            return false;
        }
    }
	*/
