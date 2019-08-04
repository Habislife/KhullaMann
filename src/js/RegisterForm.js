var check = function() {
  if (document.getElementById('password').value == 
      document.getElementById('repassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
      return false;
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
      return false;
  }
    return true;
}

/*var fieldCheck = function() {
    if (document.getElementById('username').value == "") {
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'Username cannot be empty';
    } else {
        document.getElementById('message1').style.color = 'green';
        document.getElementById('message1').innerHTML = 'Username is not empty';
    }
    
    if (document.getElementById('email').value == "") {
        document.getElementById('message2').style.color = 'red';
        document.getElementById('message2').innerHTML = 'Email cannot be empty';
    } else {
        document.getElementById('message2').style.color = 'green';
        document.getElementById('message2').innerHTML = 'Email is not empty';
    }
    
    if(document.getElementById('password').value == "") {
        document.getElementById('message3').style.color = 'red';
        document.getElementById('message3').innerHTML = 'Password cannot be empty';
        return false;
    } else {
        document.getElementById('message3').style.color = 'green';
        document.getElementById('message3').innerHTML = 'Password is not empty';
    }
    if (document.getElementById('repassword').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Repassword cannot be empty';
        return false;
    } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Repassword is not empty';
    }
    if (document.getElementById('address').value == "") {
        document.getElementById('message4').style.color = 'red';
        document.getElementById('message4').innerHTML = 'Address cannot be empty';
    } else {
        document.getElementById('message4').style.color = 'green';
        document.getElementById('message4').innerHTML = 'Address is not empty';
    }
    if (document.getElementById('contact').value == "") {
        document.getElementById('message5').style.color = 'red';
        document.getElementById('message5').innerHTML = 'Contact cannot be empty';
    } else {
        document.getElementById('message5').style.color = 'green';
        document.getElementById('message5').innerHTML = 'Contact is not empty';
    }
    return true;
}
*/

var usernamefieldCheck = function() {
    if(document.getElementById('username').value == "") {
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'Username cannot be empty';
        //document.getElementById('message1').disabled = true;
        return false;
    } else {
        document.getElementById('message1').style.color = 'green';
        document.getElementById('message1').innerHTML = 'Username is not empty';
        //document.getElementById('message1').disabled = false;
        return true;
    }
    document.getElementById('button').disabled = 'false';
    return true;
}
 
var emailfieldCheck = function() {   
    if(document.getElementById('email').value == "") {
        document.getElementById('message2').style.color = 'red';
        document.getElementById('message2').innerHTML = 'Email cannot be empty';
        //document.getElementById('message2').disabled = true;
        return false;
    } else {
        document.getElementById('message2').style.color = 'green';
        document.getElementById('message2').innerHTML = 'Email is not empty';
        //document.getElementById('message2').disabled = false;
        return true;
    }
    document.getElementById('button').disabled = 'false';
    return true;
}

var passwordfieldCheck =function() {   
    if(document.getElementById('password').value == "") {
        document.getElementById('message3').style.color = 'red';
        document.getElementById('message3').innerHTML = 'Password cannot be empty';
        //document.getElementById('message3').disabled = true;
        return false;
    } else {
        document.getElementById('message3').style.color = 'green';
        document.getElementById('message3').innerHTML = 'Password is not empty';
        //document.getElementById('message3').disabled = false;
        return true;
    }
    document.getElementById('button').disabled = 'false';
    return true;
}

var repasswordfieldCheck = function() {
    if(document.getElementById('repassword').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Repassword cannot be empty';
        //document.getElementById('message').disabled = true;
        return false;
    } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Repassword is not empty';
        //document.getElementById('message').disabled = false;
        return true;
    }
    document.getElementById('button').disabled = 'false';
    return true;
}

var addressfieldCheck = function() {
    if(document.getElementById('address').value == "") {
        document.getElementById('message4').style.color = 'red';
        document.getElementById('message4').innerHTML = 'Address cannot be empty';
        //document.getElementById('message4').disabled = true;
        return false;
    } else {
        document.getElementById('message4').style.color = 'green';
        document.getElementById('message4').innerHTML = 'Address is not empty';
        //document.getElementById('message4').disabled = false;
        return true;
    }
    return true;
}

var contactfieldCheck = function() {
    if(document.getElementById('contact').value == "") {
        document.getElementById('message5').style.color = 'red';
        document.getElementById('message5').innerHTML = 'Contact cannot be empty';
        //document.getElementById('message5').disabled = true;
        return false;
    } else {
        document.getElementById('message5').style.color = 'green';
        document.getElementById('message5').innerHTML = 'Contact is not empty';
        //document.getElementById('message5').disabled = false;
        return true;
    }
    return true;
}

var buttonChecking = function() {
    if(return usernamefieldCheck() && return emailfieldCheck() && return check() && return passwordfieldCheck() && return addressfieldCheck() && return contactfieldCheck()) {
        document.getElementById('register').disabled = 'false';
    } else {
        document.getElementById('register').disabled = 'true';
    }
}
