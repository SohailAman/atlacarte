const venueRegisterForm = document.getElementById("password-reset");

venueRegisterForm.addEventListener("submit", passwordReset);

function passwordReset(event) {

    event.preventDefault();
    const url = "https://vm-api.atlacarte.com/api/v1/login/password/reset";

    var email = document.getElementById("email").value;
    var data = {
        UserEmail: email
    }
    fetch(url, {
        method: "POST",
        body: JSON.stringify(data),
        headers: { "Content-type": "application/json; charset=UTF-8" }
    })
        .then(response => response.json())
        .then(json => {
            console.log(json);
            if (json.message == "Successfully reset password") {
                var parElement = document.getElementById("emailSentMsg");
                parElement.innerText = "A reset password link has been sent to you.";
                
            }
            else {
                var parElement = document.getElementById("emailSentMsg");
                parElement.innerText = "Email doesn't exist.";
                
            }
        })
        .catch(err => {
            console.log(err);
            var parElement = document.getElementById("emailSentMsg");
                parElement.innerText = "Email doesn't exist.";
        })







}