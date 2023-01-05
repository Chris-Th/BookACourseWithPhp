function setLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

function getLocalStorage(key) {
    return localStorage.getItem(key);
}

function confirmUserData() {
    
    let fName = getLocalStorage("fname");
    let lName = getLocalStorage("lname");
    let streetName = getLocalStorage("street");
    let streetNumber = getLocalStorage("streetNr");
    let numberAdd = getLocalStorage("nrAdd");
    let zip = getLocalStorage("plz");
    let city = getLocalStorage("ort");
    let pPhone = getLocalStorage("telP");
    let gPhone = getLocalStorage("telG");
    let mail = getLocalStorage("email");
    let bornOn = getLocalStorage("birthdate");
    let insurance = getLocalStorage("versicherung");


    let confirmationMsg = `<p><span class="label">Vorname:</span><span class="value"> ${fName}</span></p>;<p><span class="label">Nachname:</span><span class="value"> ${lName}</span></p>;<p><span class="label">Strasse:</span><span class="value"> ${streetName}</span></p>;<p><span class="label">Nr.:</span><span class="value"> ${streetNumber}</span></p>;<p><span class="label">Zusatz:</span><span class="value"> ${numberAdd}</span></p>;<p><span class="label">PLZ:</span><span class="value"> ${zip}</span></p>;<p><span class="label">Ort:</span><span class="value"> ${city}</span></p>;<p><span class="label">Telefon privat:</span><span class="value"> ${pPhone}</span></p>;<p><span class="label">Telefon Gesch.:</span><span class="value"> ${gPhone}</span></p>;<p><span class="label">E-mail:</span><span class="value"> ${mail}</span></p>;<p><span class="label">Geburtsdatum:</span><span class="value"> ${bornOn}</span></p>;<p><span class="label">Versicherung:</span><span class="value"> ${insurance}</span></p>;

    document.getElementById("dataConfirmation").innerHTML = confirmationMsg;`

}