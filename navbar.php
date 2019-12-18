<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel="stylesheet" href="css/theme.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head>
  <body>	
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <!-- Brand/logo -->
			<!-- Links -->
			<ul class="navbar-nav">
				<img class="navbar-brand" alt="logo" src="https://via.placeholder.com/40x20">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Index</a>
				</li>
				<?php 
					include 'user_logged.php'; 
					if($_SESSION['$user_logged']) { 
						echo '<li class="nav-item"><a class="nav-link" href="2.php">My Profile</a></li>'; 
						echo '<li class="nav-item"><a class="nav-link" href="3.php">Sign Out</a></li>'; 
					} 
					else { 
						echo '<li class="nav-item"><a class="nav-link" href="2.php">Login</a></li>'; 
						echo '<li class="nav-item"><a class="nav-link" href="3.php">Register</a></li>'; 
					} 
				?>
			</ul>
		</nav>
    
  </body>
</html>