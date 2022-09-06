const venueRegisterForm = document.getElementById("signup");

 venueRegisterForm.addEventListener("submit", submitSignup);


async function submitSignup(event) {

    event.preventDefault()
    
    var inputName= document.getElementById("name");
    var inputEmail= document.getElementById("email");
    var inputPhoneNumber= document.getElementById("phone-number");
    var inputPassword= document.getElementById("password");
    sessionStorage.setItem("name", inputName.value);
    sessionStorage.setItem("email", inputEmail.value);
    sessionStorage.setItem("phoneNumber", inputPhoneNumber.value);
    sessionStorage.setItem("password", inputPassword.value);

    
    window.location.href = "./venue-registration.html";
}