var check = function() {
  if (document.getElementById('password').value == 
      document.getElementById('repassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}

var fieldCheck = function() {
    if(document.getElementById('username').value == "") {
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'Username cannot be empty';
    } else {
        document.getElementById('message1').style.color = 'green';
        document.getElementById('message1').innerHTML = 'Username is not empty';
    }
    
    if(document.getElementById('email').value == "") {
        document.getElementById('message2').style.color = 'red';
        document.getElementById('message2').innerHTML = 'Email cannot be empty';
    } else {
        document.getElementById('message2').style.color = 'green';
        document.getElementById('message2').innerHTML = 'Email is not empty';
    }
    
    if(document.getElementById('password').value == "") {
        document.getElementById('message3').style.color = 'red';
        document.getElementById('message3').innerHTML = 'Password cannot be empty';
    } else {
        document.getElementById('message3').style.color = 'green';
        document.getElementById('message3').innerHTML = 'Password is not empty';
    }
    if(document.getElementById('repassword').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Repassword cannot be empty';
    } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Repassword is not empty';
    }
    if(document.getElementById('address').value == "") {
        document.getElementById('message4').style.color = 'red';
        document.getElementById('message4').innerHTML = 'Address cannot be empty';
    } else {
        document.getElementById('message4').style.color = 'green';
        document.getElementById('message4').innerHTML = 'Address is not empty';
    }
    if(document.getElementById('contact').value == "") {
        document.getElementById('message5').style.color = 'red';
        document.getElementById('message5').innerHTML = 'Contact cannot be empty';
    } else {
        document.getElementById('message5').style.color = 'green';
        document.getElementById('message5').innerHTML = 'Contact is not empty';
    }
    
/*var pass = document.getElementById('password')
pass.addEventListener('keyup', function() {
    checkPassword(pass.value)
}) 

function checkPassword(password) {
    var strenthBar = document.getElementById('strength')
    var strength = 0;
    if(password.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)) {
        strength += 1
    }
    if(password.match(/[~<>?]+/)) {
        strength += 1
    }
    if(password.match(/[!@#$%^&*()]+/)) {
        strength += 1
    }
    if(password.length > 5) {
        strength += 1
    }
    switch(strength) {
        case 0:
                strengthBar.value = 20;
                break
        case 1: 
                strengthBar.value = 40;
                break
        case 2: 
                strengthBar.value = 60;
                break
        case 3: 
                strengthBar.value = 80;
                break
        case 4: 
                strengthBar.value = 100;
                break
    }
}*/
    
}





/*var checkemail = function() {
    if((document.getElementById('email').value).indexOf('@'<=0)) {
        document.getElementById('message2').style.color = 'red';
        document.getElementById('message2').innerHTML = 'email is invalid';
    } else {
        document.getElementById('message2').style.color = 'green';
        document.getElementById('message2').innerHTML = 'email is valid';
    }
    
    if((document.getElementById('email').value).charAt((document.getElementById('email').value).length-4)!='.') && ((document.getElementById('email').value).charAt((document.getElementById('email').value)length-3)!='.') {
        document.getElementById('message2').style.color = 'red';
        document.getElementById('message2').innerHTML = 'invalid . position of 4';
    } else {
        document.getElementById('message2').style.color = 'green';
        document.getElementById('message2').innerHTML = 'valid . position';
    }
}*/