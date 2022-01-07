function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
}
function validateLoginForm() {
  var email = document.loginForm.email.value;
  var password = document.loginForm.password.value;

  var emailErr = (passwordErr = true);
  // email
  if (email == "") {
    printError("emailErr", "Please enter your email address");
  } else {
    // Regular expression for basic email validation
    var regex = /^\S+@\S+\.\S+$/;
    if (regex.test(email) === false) {
      printError("emailErr", "Please enter a valid email address");
    } else {
      printError("emailErr", "");
      emailErr = false;
    }
  }

  // password
  if (password == "") {
    printError("passwordErr", "Please enter your password");
  } else {
    // Regular expression for basic password validation
    var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    if (regex.test(password) === false) {
      printError("passwordErr", "Please enter a valid password");
    } else {
      printError("passwordErr", "");
      passwordErr = false;
    }
  }

  if ((emailErr || passwordErr) == true) {
    return false;
  } else {
    // console.log("sahiiiiiiiiiiii");
    alert("You have successfully logged in");
  }
}
