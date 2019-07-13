/*
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
*/

var checkform = function() {
    if(document.getElementById('email').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Email cannot be empty';
    } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Email is not empty';
    }
    
    if(document.getElementById('password').value == "") {
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'Password cannot be empty';
    } else {
        document.getElementById('message1').style.color = 'green';
        document.getElementById('message1').innerHTML = 'Password is not empty';
    }
}
