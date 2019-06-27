function checkform(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('errorMessage');


    if(username==""){
        errorMessage.textContent = "Username can't be empty";
    return false;
}

    if(password==""){
        errorMessage.textContent = "Password can't be empty";

        return false;
    }

    return true;
}

