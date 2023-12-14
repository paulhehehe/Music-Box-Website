/* <!-- Author 1: Lei Zhao 041086365 -->
<!-- Author 2: Zhicheng He 041086226 -->
<!-- Author 3: Yuling Guo 041069402 -->
<!-- Author 4: Yu Song 040873597 -->
<!-- Section: CST8285_301 -->
<!-- Professor: Shehzeen Shehzeen -->
<!-- File name: login_registration_script.js -->
<!-- Date: Jul. 23, 2023 -->
<!-- Description: login_registration_script.js --> */
function validate() {
  // Reset any previous error messages and field highlighting
  clearErrors();

  // Get form elements
  const emailInput = document.getElementById("email");
  const loginInput = document.getElementById("login");
  const passInput = document.getElementById("pass");
  const pass2Input = document.getElementById("pass2");
  const newsletterInput = document.getElementById("newsletter");
  const termsInput = document.getElementById("terms");

  const errorMessages = [];

  // Check email validity
  const emailPattern = /^\S+@\S+\.\S+$/;
  if (!emailPattern.test(emailInput.value)) {
    errorMessages.push({
      element: emailInput,
      message: "Email address should be non-empty with the format xyx@xyz.xyz",
    });
  }

  // Check login name length and convert to lowercase
  const loginName = loginInput.value.trim().toLowerCase();
  if (loginName.length === 0 || loginName.length > 20) {
    errorMessages.push({
      element: loginInput,
      message: "User name should be non-empty, and within 20 characters long",
    });
  }

  // Check password length and complexity
  if (
    passInput.value.length < 6 ||
    !/[a-z]/.test(passInput.value) ||
    !/[A-Z]/.test(passInput.value)
  ) {
    errorMessages.push({
      element: passInput,
      message:
        "Password should be at least 6 characters: 1 uppercase, 1 lowercase.",
    });
  }

  // Check if passwords match
  if ((pass2Input.value.length === 0) || (pass2Input.value !== passInput.value)) {
    errorMessages.push({
      element: pass2Input,
      message: "Please retype password.",
    });
  }

  // Check if terms are accepted
  if (!termsInput.checked) {
    errorMessages.push({
      element: termsInput.parentNode,
      message: "Please accept the terms and conditions",
    });
  }

  // Display all non-compliant error messages together
  if (errorMessages.length > 0) {
    displayErrorMessages(errorMessages);
    return false;
  }

  // Clear the form contents after successful submission
  document.getElementById("registration-form").reset();
}

// Clear the form contents after successful submission
document.getElementById("reset").addEventListener("click", function () {
  clearErrors();
});


//function to display error messages.
function displayErrorMessages(errorMessages) {
  errorMessages.forEach(({ element, message }) => {
    const errorMessage = document.createElement("div");
    errorMessage.textContent = message;
    errorMessage.classList.add("error-message");

    // Check if the element is a checkbox
    if (element.type === "checkbox") {
      const checkboxContainer = document.createElement("div");
      checkboxContainer.appendChild(errorMessage);
      element.parentNode.insertBefore(checkboxContainer, element.nextSibling);
    } else {
      element.parentNode.insertBefore(errorMessage, element.nextSibling); // Insert before the element's next sibling
    }

    element.classList.add("error");
  });
}


//function to remove the error message.
function clearErrors() {
  const errorMessages = document.querySelectorAll(".error-message");
  errorMessages.forEach((errorMessage) => errorMessage.remove());

  const errorInputs = document.querySelectorAll(".error");
  errorInputs.forEach((errorInput) => errorInput.classList.remove("error"));
}


// event to get the newsletter alert
document.addEventListener("DOMContentLoaded", function () {
  // Get the newsletter checkbox element
  const newsletterInput = document.getElementById("newsletter");

  // Add an event listener to the checkbox
  newsletterInput.addEventListener("change", function () {
    if (newsletterInput.checked) {
      alert(
        "You may receive newsletters that might include promotional content."
      );
    }
  });
});
