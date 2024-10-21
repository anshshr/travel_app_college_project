function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    var terms = document.getElementById("terms").checked;

    // Name validation
    if (name.length < 3) {
        alert("Name must be at least 3 characters long.");
        return false;
    }

    // Password matching validation
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }

    // Terms and conditions validation
    if (!terms) {
        alert("You must agree to the terms and conditions.");
        return false;
    }

    return true;
}
