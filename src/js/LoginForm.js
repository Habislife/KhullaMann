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

function formValidate(){
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var errorMessage = document.getElementById('errorMessage');

  if (email=="") {
    errorMessage.textContent = "Email can't be empty.";
    return false;
  }
  if (password=="") {
    errorMessage.textContent = "password can't be empty.";
    return false;
  }
  if (password.length<=8) {
    errorMessage.textContent = "Password length is too short";
    return false;
  }
  if (password.length>=20) {
    errorMessage.textContent = "Password length is too long";
    return false;
  }
    
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(email)){
       errorMessage.textContent="Enter valid Email."
       return false;  
    }
    else{
        
        return true;
    }
}    


var checkform = function() {
    if(document.getElementById('email').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Email cannot be empty';
        return false;
    } else {
        document.getElementById('message').style.color = '';
        document.getElementById('message').innerHTML = '';
        return false;
    }
    
    if(document.getElementById('password').value == "") {
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'Password cannot be empty';
        return false;
    } else {
        document.getElementById('message1').style.color = '';
        document.getElementById('message1').innerHTML = '';
        return false;
    }
    return true;
}

function show_hide() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

