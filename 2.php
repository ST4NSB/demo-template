<!DOCTYPE html>
<html>  
	<head>    
		<meta charset="UTF-8">    
		<link rel="stylesheet" type="text/css" href="css/theme.css">    
		<?php		include 'user_logged.php';		
			if($_SESSION['$user_logged']) {			
				echo '<title>My Profile</title>';		
			}		
			else {			
				echo '<title>Login Page</title>';		
			}		
		?>  
	</head>
	<body>   
		<div id="container">   
		<?php     
			include 'navbar.php';		
			if($_SESSION['$user_logged']) {		
				echo '<h1> Profile - </h1>';			
				echo '<button type="button">Javascript</button>';	
			}	
			else {	
				include 'form_login.html';		
			}     
		?>         
		</div>	<script src="js/main.js"></script>   
		<script src="js/2.js"></script> 
	</body>
	</html>
	