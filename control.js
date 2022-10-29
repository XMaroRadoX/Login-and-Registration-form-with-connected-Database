window.onload = function () {
  validateformlogin();
  validateformregistration();
};
function validateformlogin() {
  loginform = document.getElementById("loginform");
  loginform.addEventListener("submit", function (event) {
    var email = document.getElementById("email-login").value;
    var password = document.getElementById("password-login").value;
    let bool = false;
    password.length == 0 ? alert("please enter password") : (bool = true);
    console.log(bool);
    if (!(emailformater(email) && bool)) {
      event.preventDefault();
      console.log("prevented");
    }
  });
}
function validateformregistration() {
  registrationform = document.getElementById("registrationform");
  registrationform.addEventListener("submit", function (event) {
    var name = document.getElementById("username").value;
    var emailregister = document.getElementById("email-registration").value;
    var passwordregister = document.getElementById(
      "password-registration"
    ).value;
    var password2 = document.getElementById("password2-registration").value;
    let bool = false;
    if (!(passwordregister.length && password2.length)) {
      alert("please enter both password fields correctly");
    } else {
      passwordregister === password2
        ? (bool = true)
        : alert("please enter both password fields correctly");
    }
    if (!name.length) {
      bool = false;
      alert("please enter a username:");
    }
    if (!(emailformater(emailregister) && bool)) {
      event.preventDefault();
      console.log("prevented");
    }
  });
}

// /////////////////////////////////////////
function switchingforms() {
  var x = document.getElementById("registration-form");
  var y = document.getElementById("login-form");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}
//////////////////////////////////////////////////
function emailformater(email) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.match(mailformat)) {
    return true;
  } else {
    alert("You have entered an invalid email address!");
    return false;
  }
}
