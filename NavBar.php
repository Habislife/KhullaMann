<!DOCTYPE html>
<html>
<head>
  <title>Navigation Bar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<style>
  * {
    font-family: 'Raleway', sans-serif;
    margin: 0;
    padding : 0;
  }

nav {
  position: fixed; 
  top: 0; 
  width: 100%; 
  z-index: 1;
}

ul {
  height: 50px;
  list-style-type: none;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #4CAF50;
}

#search-container {
  float :right;
}

#search-container input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

 #search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

#menu{
  float: right;
}

</style>
</head>
<body>

  <nav>
    <ul>
      <li><a class="active" href="#logo">KhullaMann</a></li>
      <li><a  href="#">Home</a></li>
      <li><a  href="#">About</a></li>
      <li><a  href="#">Contact</a></li>
    
      <form id="search-container">
        <input type="text" name="search" placeholder="Search....."> 
        <button><i class="fa fa-search"></i></button>
      </form>

      <div id="menu">
        <li><a href="RegisterForm.php">Become a Donor</a></li>
        <li><a href="DoneeRegForm.php">Sign Up</a></li>
        <li><a href="LoginForm.php">Log In</a></li>
      </div>  
    </ul>
  </nav>

  

</body>
</html>








