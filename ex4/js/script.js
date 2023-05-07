// Password validation
const form = document.querySelector('form');
const passwordInput = form.querySelector('input[name="pass"]');
const passwordError = form.querySelector('#password-error');

form.addEventListener('submit', (event) => {
  if (!passwordInput.checkValidity()) {
    event.preventDefault();
    passwordError.textContent = passwordInput.validationMessage;
  } else {
    passwordError.textContent = '';
  }
});

// URL validation
const inputElement = document.getElementById('exampleInputUrl');
inputElement.addEventListener('input', function() {
  if (!inputElement.checkValidity()) {
    inputElement.setCustomValidity('Please enter a valid URL.');
  } else {
    inputElement.setCustomValidity('');
  }
});

// Range input display
function updateTextInput(val) {
  document.getElementById('textInput').value=val; 
}