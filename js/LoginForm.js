function checkform(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('errorMessage');


    if(email==""){
        errorMessage.textContent = "Email can't be empty";
    return false;
}

    if(password==""){
        errorMessage.textContent = "Password can't be empty";

        return false;
    }

    return true;
}

