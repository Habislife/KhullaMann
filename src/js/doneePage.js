function validatePost(){
	var file = document.getElementById('file');
	var bio = document.getElementById('bio');
	var description = document.getElementById('description');

	if(file=="") {
		document.getElementById('msg1').style.color = 'red';
		document.getElementById('msg1').innerHTML = 'image cannot be empty';
		return false;
	} else {
        document.getElementById('msg1').style.color = '';
        document.getElementById('msg1').innerHTML = '';
              
    }
	if(bio=="") {
		document.getElementById('msg2').style.color = 'red';
		document.getElementById('msg2').innerHTML = 'bio cannot be empty';
		return false;
	} else {
        document.getElementById('msg2').style.color = '';
        document.getElementById('msg2').innerHTML = '';
              
    }
	if(description=="") {
		document.getElementById('msg3').style.color = 'red';
		document.getElementById('msg3').innerHTML = 'description cannot be empty';
		return false;
	} else {
        document.getElementById('msg3').style.color = '';
        document.getElementById('msg3').innerHTML = '';
              
    }
	return true;
}

    var loadFile = function(event) {
      var image = document.getElementById('image2');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
  
