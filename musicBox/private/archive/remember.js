// Get the checkbox element
const rememberMeCheckbox = document.getElementById("rememberMeCheckbox");

// Function to handle the checkbox state change
function handleRememberMe() {
    const username = document.getElementById("login").value;
    const password = document.getElementById("pass").value;
    if (rememberMeCheckbox.checked) {
        // The checkbox is checked, so store the credentials in cookies
        debugger;
        setCookie("username", username, 7); // Store the username for 7 days
        setCookie("password", password, 7); // Store the password for 7 days
    } else {
        // The checkbox is unchecked, so remove the stored credentials (if any)
        debugger;
        deleteCookie("username");
        deleteCookie("password");
    }
}

// Add an event listener to the checkbox to trigger the function when the state changes
rememberMeCheckbox.addEventListener("change", handleRememberMe);

// Function to set a cookie
function setCookie(name, value, daysToExpire) {
    const date = new Date();
    date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// Function to get a cookie by name
function getCookie(name) {
    const cookies = document.cookie.split(';');
    for (const cookie of cookies) {
        const parts = cookie.split('=');
        const cookieName = parts[0].trim();
        if (cookieName === name) {
            return decodeURIComponent(parts[1]);
        }
    }
    return null;
}

// Function to delete a cookie by name
function deleteCookie(name) {
    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
}
