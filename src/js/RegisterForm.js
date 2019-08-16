function validateForm(){
  var username = document.getElementById('username').value;
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var repassword = document.getElementById('repassword').value;
  var address = document.getElementById('address').value;
  var contact = document.getElementById('contact').value;
  var errorMessage = document.getElementById('errorMessage');

  if (username=="") {
    errorMessage.textContent = "username can't be empty.";
    return false;
  }
  if (email=="") {
    errorMessage.textContent = "Email can't be empty.";
    return false;
  }
    if (password=="") {
    errorMessage.textContent = "password can't be empty.";
    return false;
  }
    if (repassword=="") {
    errorMessage.textContent = "password re-type can't be empty.";
    return false;
  }
  if (address=="") {
    errorMessage.textContent = "address can't be empty.";
    return false;
  }
  if (contact=="") {
    errorMessage.textContent = "contact can't be empty.";
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
  if (password!= repassword) {
    errorMessage.textContent = "The two passwords don't match.";
    return false;
  }
    
        var abc = /^[A-Z][a-z]+\s[A-Z][a-z]+$/;
    if(!abc.test(fullName)){
        errorMessage.textContent="Enter valid Full name."
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
    

var check = function() {
  if (document.getElementById('password').value == 
      document.getElementById('repassword').value) {
    document.getElementById('repassword').style.color = 'green';
    document.getElementById('repassword').innerHTML = '';
      return false;
  } else {
    document.getElementById('repassword').style.color = 'red';
    document.getElementById('repassword').innerHTML = 'not matching';
      return false;
  }
    return true;
}

var fieldCheck = function() {
    if (document.getElementById('username').value == "") {
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'Username cannot be empty';
        return false;
    } else {
        document.getElementById('message1').style.color = '';
        document.getElementById('message1').innerHTML = '';
        return false;      
    }
    
    if (document.getElementById('email').value == "") {
        document.getElementById('message2').style.color = 'red';
        document.getElementById('message2').innerHTML = 'Email cannot be empty';
        return false;
    } else {
        document.getElementById('message2').style.color = '';
        document.getElementById('message2').innerHTML = '';
        return false;
        
    }
    
    if(document.getElementById('password').value == "") {
        document.getElementById('message3').style.color = 'red';
        document.getElementById('message3').innerHTML = 'Password cannot be empty';
        return false;

    } else {
        document.getElementById('message3').style.color = '';
        document.getElementById('message3').innerHTML = '';
        
        
    }
    if (document.getElementById('repassword').value == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Repassword cannot be empty';
        return false;
    
    } else {
        document.getElementById('message').style.color = '';
        document.getElementById('message').innerHTML = '';
        
        
    }
    if (document.getElementById('address').value == "") {
        document.getElementById('message4').style.color = 'red';
        document.getElementById('message4').innerHTML = 'Address cannot be empty';
        return false;
    } else {
        document.getElementById('message4').style.color = '';
        document.getElementById('message4').innerHTML = '';
        
        
    }
    if (document.getElementById('contact').value == "") {
        document.getElementById('message5').style.color = 'red';
        document.getElementById('message5').innerHTML = 'Contact cannot be empty';
        return false;
    } else {
        document.getElementById('message5').style.color = '';
        document.getElementById('message5').innerHTML = '';
        
    }
    return true;
}
var loadFile = function(event) {
      var image = document.getElementById('image');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
