<!DOCTYPE html>
<html>
<head>
	<title>Donee Page</title>
	<link rel="stylesheet" type="text/css" href="../css/DoneePage.css">
</head>
<body>
   <div class=header>
      <div class="logo"><h1 align="center">KM</h1></div>
    
      <div class="head">
        <input type="text" name="text" placeholder="Search..">
        
        <button type="submit" name="submit" id="searchButton">Search</button>
          
        <a href="#" id="name">Logout</a> 
       </div>
    </div>

  <nav id="navbar">
    <ul id="nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Discussion</a></li>    
      <li><a href="#">Contact Us</a></li>
    </ul>
  </nav>

  <form>
    <div class="post_field" align="center">
        <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)">
        <div id="upload">
          <img id="image2">
        </div>

        <label>
           <textarea rows="5" id="bio" placeholder="Write your bio here..."></textarea>
        </label>
        <br><br>

        <label>
          <textarea rows="25" id="full" placeholder="Write full Description here..."></textarea>
        </label>
        <br><br>

        <button type="submit" name="submit" class="register">Post</button>
    </div>
  </form>
  <div class="footer" align="center"><h1>Footer</h1></div>

  <script>
    var loadFile = function(event) {
      var image = document.getElementById('image2');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>

</body>
</html>