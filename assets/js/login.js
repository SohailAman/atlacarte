

var jwt = localStorage.getItem("jwt");
if (jwt != null) {
  window.location.replace('https://vm.atlacarte.com/token/' + objects['data'].access_token);
}

function login() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "https://vm-api.atlacarte.com/api/v1/login");
  xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
  xhttp.send(JSON.stringify({
    "email": email,
    "password": password
  }));
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4) {

      const objects = JSON.parse(this.responseText);
      // console.log('objects :>> ', objects);
      if (objects['message'] == "Successfully logged in!") {

        localStorage.setItem("jwt", objects['data'].access_token);

        var url = 'https://vm.atlacarte.com/token/' + objects['data'].access_token;

        console.log('url :>> ', url);
        window.location.replace(url);

      } else {
        if (objects['message'] == "Account is not yet approved") {


          var parElement = document.getElementById("accountExistsMsg");

          parElement.innerText = "Account is not yet approved";
        } else {

          var parElement = document.getElementById("accountExistsMsg");

          parElement.innerText = "Invalid credentials";
        }
      }
    }

  };
  return false;
}


