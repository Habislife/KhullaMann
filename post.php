<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 90%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
	left: 0;
  background-image: url(src/images/postpic.jpg);
  background-size: 100% 100%;
  background-repeat: no-repeat;
  
}

.right {
  right: 0;
  
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: black;
}


</style>
</head>
<body>

<?php include 'Nav.html' ?> 

<div class="split right">
  <div class="centered" >
    <h1>Music Concert</h1>
    <br>
    <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
    <br>
    <label>$100</label>
    <button>Donate</button>
    <div style="margin: 24px 0;">
  </div>
  </div>
</div>

<div class="split left">
  <div class="centered">
    
  </div>
</div>
     
</body>
</html> 
