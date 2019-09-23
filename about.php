<!DOCTYPE html>
<html>
<head>
	<title>Khulla Mann | About </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="src/css/NavBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/About.css">
</head>
<body>
	
	<header>
  <div class="container">
      <div id="branding">
          <h1><span class="highlight">Khulla</span> Mann</h1>
      </div>

    <div class="togglearea">
      <label for="toggle">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    
    <input type="checkbox" id="toggle">
    <div class="navbar">
      <a href="index.php">Home</a>
          <a href="about.php" class="current">About</a>
          <a href="Feedback.php">Contact Us</a>
          <a href="RegisterForm.php">Become a donor</a>
          <a href="DoneeRegForm.php">Sign Up</a>
          <a href="LoginForm.php">Login</a>
    </div>
  </div>
</header>


	<section id="banner">
		<div class="container">
			<h1>Search to Donate</h1>
			<form>
				<input type="text" placeholder="Search...">
				<button type="submit" class="button_1">Search</button>
			</form>
		</div>
	</section>

	<section id="main">
		<div class="container">
			<article id="main-col">
				<h1 class="page-title">About Us</h1>
				<div>
					<img src="img3.jpeg" >
				</div>
			</article>

			<aside id="sidebar">
				<div class="dark">
					<h3>What We Do</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>
			</aside>
		</div>
	</section>

	<footer>
		<p>Khulla Mann, Copyright &copy; 2019</p>
	</footer>
</body>
</html>