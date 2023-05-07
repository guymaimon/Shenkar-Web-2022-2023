const emailInput = document.querySelector('input[name="mail"]');
const passwordInput = document.querySelector('input[name="pass"]');
const websiteInput = document.querySelector('input[name="website"]');
const phoneInput = document.querySelector('input[name="phone"]');


// Validate Full Name
function validateInput() {
  const fullNameInput = document.getElementById("exampleInputName");
  const feedbackMsg = document.getElementById("feedback");
  const regex = /^[a-zA-Z]+\s+[a-zA-Z]+$/;

  if (!regex.test(fullNameInput.value)) {
    feedbackMsg.innerText = "Please enter your full name with a single space between two words and without digits.";
    feedbackMsg.style.color = "red";
    fullNameInput.classList.add("is-invalid");
  } else {
    feedbackMsg.innerText = "Looks good!";
    feedbackMsg.style.color = "green";
    fullNameInput.classList.remove("is-invalid");
    fullNameInput.classList.add("is-valid");
  }
}
// Validate email input
emailInput.addEventListener("blur", () => {
  const emailError = document.getElementById("email-error");
  if (!emailInput.checkValidity()) {
    emailError.textContent = "Please enter a valid email address.";
    emailError.style.color = "red";
  } else {
    emailError.textContent = "";
  }
});

// Validate password input
passwordInput.addEventListener("keyup", () => {
  const passwordError = document.getElementById("password-error");
  if (!passwordInput.checkValidity()) {
    passwordError.textContent = "Password must contain at least 8 characters including at least one number, one uppercase letter, one lowercase letter, and one special character (!@#$%^&*).";
    passwordError.style.color = "red";
  } else {
    passwordError.textContent = "";
  }
});

// Validate website input
websiteInput.addEventListener("blur", () => {
  const websiteError = document.getElementById("website-error");
  if (!websiteInput.checkValidity()) {
    websiteError.textContent = "Please enter a valid URL.";
    websiteError.style.color = "red";
  } else {
    websiteError.textContent = "";
  }
});

// Validate phone input
phoneInput.addEventListener("blur", () => {
  const phoneError = document.getElementById("phone-error");
  if (!phoneInput.checkValidity()) {
    phoneError.textContent = "Please enter a valid phone number.";
    phoneError.style.color = "red";
  } else {
    phone.textContent ="";
  }
});

form.addEventListener('submit', (event) => {
  if (!passwordInput.checkValidity()) {
    event.preventDefault();
    passwordError.textContent = passwordInput.validationMessage;
  } else {
    passwordError.textContent = '';
  }
});



// Range input display
function updateTextInput(val) {
  document.getElementById('textInput').value=val; 
}

