/******/ (() => { // webpackBootstrap
/*!**********************************!*\
  !*** ./resources/js/register.js ***!
  \**********************************/
document.addEventListener("DOMContentLoaded", function () {
  var form = document.querySelector("form");
  var nameRegex = /^[a-zA-ZÀ-ÿ\s]+$/;
  var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
  form.addEventListener("submit", function (event) {
    var isValid = true;
    var firstName = document.getElementById("first-name");
    if (!nameRegex.test(firstName.value)) {
      alert("Le prénom doit contenir uniquement des lettres et des espaces.");
      firstName.focus();
      isValid = false;
    }

    // Validate Last Name
    var lastName = document.getElementById("last-name");
    if (!nameRegex.test(lastName.value)) {
      alert("Le nom doit contenir uniquement des lettres et des espaces.");
      lastName.focus();
      isValid = false;
    }

    // Validate Email
    var email = document.getElementById("email");
    if (!emailRegex.test(email.value)) {
      alert("L'email n'est pas valide.");
      email.focus();
      isValid = false;
    }

    // Validate Password
    var password = document.getElementById("password");
    if (!passwordRegex.test(password.value)) {
      alert("Le mot de passe doit contenir au moins 8 caractères, incluant des lettres et des chiffres.");
      password.focus();
      isValid = false;
    }

    // Confirm Password
    var confirmPassword = document.getElementById("confirm-password");
    if (password.value !== confirmPassword.value) {
      alert("Les mots de passe ne correspondent pas.");
      confirmPassword.focus();
      isValid = false;
    }

    // Validate Terms checkbox
    var terms = document.getElementById("terms");
    if (!terms.checked) {
      alert("Vous devez accepter les conditions d'utilisation.");
      isValid = false;
    }

    // If form is invalid, prevent submission
    if (!isValid) {
      event.preventDefault();
    }
  });
});
/******/ })()
;