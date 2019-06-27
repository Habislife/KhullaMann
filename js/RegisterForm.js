function formValidator(){
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var contact = document.getElementById('contact').value;
    var password = document.getElementById('password').value;
    var repassword = document.getElementById('repassword').value;
    var errorMessage = document.getElementById('errorMessage');


    if(username==""){
        errorMessage.textContent = "Username can't be empty";
    return false;
    }  

    if(email==""){
        errorMessage.textContent = "Email can't be empty";
        return false;
    }
  
    if(address==""){
        errorMessage.textContent = "Address can't be empty";
        return false;
    }
    
    if(contact==""){
        errorMessage.textContent = "Contact can't be empty";
    }

    if(password==""){
        errorMessage.textContent = "Password can't be empty";

        return false;
    }

    if(repassword==""){
        errorMessage.textContent = "Password re-type can't be empty";

        return false;
    }

    if(password!=repassword){
        errorMessage.textContent="The two password donot match";
        return false;
    }
     
    if(!document.getElementById('agree').checked){
        alert("You have agree our terms and conditions in order to proceed.");
    }


    return true;
}