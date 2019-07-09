    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var contact = document.getElementById('contact').value;
    var password = document.getElementById('password').value;
    var repassword = document.getElementById('repassword').value;
   var errorMessage = document.getElementById('errorMessage');
     function validateform()
     {
    if( username=="" || username==null){
        // errorMessage.textContent = "Username can't be empty";
        alert("Name can't be blank");
        return false
    }  

    if(email=="" || email==null){
        errorMessage.textContent = "Email can't be empty";
        return false
    }
  
    if(address==""|| email==null){
        errorMessage.textContent = "Address can't be empty";
    }
    
    if(contact=="" || email==null ){
        errorMessage.textContent = "Contact can't be empty";
    }

    if(password=="" || email==null){
        errorMessage.textContent = "Password can't be empty";

    }

    if(repassword=="" || email==null){
        errorMessage.textContent = "Password re-type can't be empty";
        return false
    
    }
     
    if(!document.getElementById('agree').checked){
        alert("You have agree our terms and conditions in order to proceed.");
        return false
    }
}

    function checkPassword(){
        if(repassword!=password){
            document.getElementById('repassword').style.color = 'red';
        }
    }
