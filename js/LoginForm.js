var email = document.getElementById('email').value;
var password = document.getElementById('password').value;
var errorMessage = document.getElementById('errorMessage');

function checkform() {
    if(email==" " || email==null)
    {
        errorMessage.textContent = "Email can't be empty";
    return false;
    }

    if(password==" " || password==null) {
        errorMessage.textContent = "Password can't be empty";

        return false;
    }

    return true;
}

