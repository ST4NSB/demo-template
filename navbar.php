<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<link rel="stylesheet" type="text/css" href="css/component.css">
	<link rel="stylesheet" href="css/theme.css">
  </head>
  <body>	
		<section class="section section--menu" id="Iris">
			<h2 class="section__title">Movie Rating Database</h2>
			<img class="logo" alt="logo" src="http://via.placeholder.com/300x100">
			<nav class="menu menu--iris">
				<ul id="navbar_up" class="menu__list">
					<li class="menu__item"><a href="index.php" class="menu__link">Home</a></li>
					<?php 
						include 'user_logged.php'; 
						if($_SESSION['$user_logged']) { 
							echo '<li class="menu__item"><a class="menu__link" href="2.php">' . 
							$_SESSION['$name'] . ' - Profile</a></li>'; 
							echo '<li class="menu__item"><a class="menu__link" href="3.php">Sign Out</a></li>'; 
						} 
						else { 
							echo '<li class="menu__item"><a class="menu__link" href="2.php">Login</a></li>'; 
							echo '<li class="menu__item"><a class="menu__link" href="3.php">Register</a></li>'; 
						} 
					?>
				</ul>
			</nav>
		</section>
	
  </body>
</html>