

function ValidateEmail(email) {
        var regEx = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
        return regEx.test(email);
    }

function checkLength(text, min, max){
    min = min || 1;
    max = max || 10000;
 
    if (text.length < min || text.length > max) {
        return false;
    }
    return true;
}
 
function reportErrors(errors){
    var numError;
    for (var i = 0; i<errors.length; i++) {
        numError = i + 1;
        var msg;
        msg += "\n" + numError + ". " + errors[i];
    }
    alert(msg);
}

function validate(form){

	var email = form.email.value;
    var firstName = form.firstName.value;
    var lastName = form.lastName.value;
    var message = form.message.value;
    var errors = [];
 
    if (!checkLength(email) || !ValidateEmail(email)) {
        errors.push("You must enter a valid email address.");
    }
 
    if (!checkLength(firstName)) {
        errors.push("You must enter a First Name.");
    }
     if (!checkLength(lastName)) {
        errors.push("You must enter a Last Name.");
    }
 
    if (errors.length > 0) {
        reportErrors(errors);
        return false;
    }
 
    return false;

}

function groomValidate(form) {
    var firstName = form.firstName.value;
    var lastName = form.lastName.value;
    var address = form.address.value;
    var city = form.city.value;
    var state = form.state.value;
    var zip = form.zip.value;
    var phone = form.phone.value;
    var radios = document.getElementsByName("petType");
    var petName = form.petName.value;
    var errors = [];

    
    var radValid = false;

    var i = 0;
    while (!radValid && i < radios.length) {
        if (radios[i].checked) radValid = true;
        i++;        
    }


  if (!checkLength(firstName)) {
        errors.push("You must enter a First Name.");
    }

    if (!checkLength(lastName)) {
        errors.push("You must enter a Last Name.");
    }

        if (!checkLength(address)) {
        errors.push("You must enter an Address.");
    }

        if (!checkLength(city)) {
        errors.push("You must enter a City.");
    }
           if (!checkLength(state)) {
        errors.push("You must enter a State.");
    }

        if (!checkLength(zip) || zip.length != 5 || isNaN(zip)) {
        errors.push("You must enter a Zip Code");
    }

        if (!checkLength(phone) || phone.length != 10 || isNaN(phone)) {
        errors.push("You must enter a Phone Number");
    }

        if (!radValid) {

        errors.push("You must enter a Pet Type.");
    }

        if (!checkLength(petName)) {
        errors.push("You must enter a name for your pet.");
    }

        if (errors.length > 0) {
        reportErrors(errors);
        return false;
    }
}

function asdf(x) {

     if (this.value === "dog") { //Look for this.value for dog.
         breed.style.display = "inline";

     } else {
         breed.style.display = "none";
     }
 }

 var typeOfPet = document.getElementsByName('petType'); //Get the elements by name
 for (var i = 0, l = typeOfPet.length; i < l; i++) { //Loop through them
     typeOfPet[i].addEventListener('change', asdf, false); //Bind listener to them each of them.
 }