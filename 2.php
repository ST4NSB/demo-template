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
			include 'config.php';
			if($_SESSION['$user_logged']) {		
				echo '<h1>' . $_SESSION['$name'] . ' ' . $_SESSION['$surname'] . ' - Profile</h1>';			
				echo '<button type="button">Javascript</button>';	
				
				$u_id = $_SESSION['$user_id'];
				$sql = "SELECT * FROM rated_movie WHERE user_id='$u_id'";
				$result = mysql_query($sql);
				if($result) {
					if(mysql_num_rows($result) > 0 ) {
						while($row = mysql_fetch_array($result)) {
							$key = 'beefda61';
							$uri = "http://www.omdbapi.com/?apikey=" . $key . "&i=" . $row['movie_id'];
									
							$response = file_get_contents($uri);
							$json_resp = json_decode($response);
							
							echo '<p>Movie title: ' . $json_resp->Title . '</p>';
							echo '<p>Vote: ' . $row['vote'] . '</p>';
						}
						mysql_free_result($result);
					}
					else 
						echo "<p> Wrong input values!<br>Error: , " . $result . "</p>";
				}
				else 
					echo "<p>No result from server!<br>Error: " . $result . "</p>";
			}	
			else {	
				include 'form_login.html';		
			}     
		?>         
		</div>	<script src="js/main.js"></script>   
		<script src="js/2.js"></script> 
	</body>
	</html>
	