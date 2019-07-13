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
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Username cannot be empty';
    } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Username is not empty';
    }
    
    if(document.getElementById('email').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Email cannot be empty';
    } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Email is not empty';
    }
    
    if(document.getElementById('password').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Password cannot be empty';
    } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Password is not empty';
    }
    if(document.getElementById('repassword').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Repassword cannot be empty';
    } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Repassword is not empty';
    }
    if(document.getElementById('address').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Address cannot be empty';
    } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Address is not empty';
    }
    if(document.getElementById('contact').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Contact cannot be empty';
    } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Contact is not empty';
    }
    
}