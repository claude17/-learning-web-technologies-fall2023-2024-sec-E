function checkCharacters(input) {

}

function checkUsername(input) {
    
}

function digitCheck(input, digit) {
    
}

function validateForm() {
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var userName = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var phone = document.getElementById('phone').value;

    if (firstName == "" || checkCharacters(firstName)) {
        alert("First Name is required and should contain only characters.");
        return false;
    }

    if (lastName == "" || checkCharacters(lastName)) {
        alert("Last Name is required and should contain only characters.");
        return false;
    }

    if (userName == "" || digitCheck(userName, 6) || checkUsername(userName)) {
        alert("Username is required, should be at least 6 characters long, and should only contain letters, numbers, dot, and underscore.");
        return false;
    }

    if (email == "") {
        alert("Email is required.");
        return false;
    }

    if (password == "" || digitCheck(password, 6)) {
        alert("Password is required and should be at least 6 characters long.");
        return false;
    }

    if (gender=="") {
        alert("Please select a gender.");
        return false;
    }

    if (phone == "" || digitCheck(phone, 11)) {
        alert("Phone is required and should be 11 digits long.");
        return false;
    }

    return true;
}