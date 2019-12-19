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
				echo '<div id="container">';
				echo '<h1>' . $_SESSION['$name'] . ' ' . $_SESSION['$surname'] . ' - Profile</h1>';			
				echo '<button id="bttn_love" type="button">Show/Hide &#128150</button>';	
				echo '<button id="bttn_hate" type="button">Show/Hide &#128078</button>';	
				
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
							
							echo '<div class="';
							if($row['vote'] == 'LOVED')
								echo 'r_love">';
							else echo 'r_hate">';
							echo '<p>' . $json_resp->Title;
							if($row['vote'] == 'LOVED')
								echo ' - <span class="sp_love">&#128150</span></p>';
							else if($row['vote'] == 'HATED')
								echo ' - <span class="sp_hate">&#128078</span></p>';
							
							echo '<img class="small_poster" alt="movie poster" src="' . $json_resp->Poster . '">';
							//echo '<p>Vote: ' . $row['vote'] . '</p>';
							echo '</div>';
						}
						mysql_free_result($result);
					}
					else {
						echo "<h1>You didn't vote anything yet!</h1>";
						echo "<h1>Search your favorite movie and VOTE!</h1>";
					}
					echo '</div>';
					include 'footer.php';
				}
				else 
					echo "<p>No result from server!<br>Error: " . $result . "</p>";
			}	
			else {	
				echo '<div id="container">';
				if(isset($_SESSION['$login_error'])) {
					echo '<p>ERROR: ' . $_SESSION['$login_error'] . '</p>';
					unset($_SESSION['$login_error']);
				}
				if(isset($_SESSION['$reg_ok'])) {
					echo '<p>' . $_SESSION['$reg_ok'] . '</p>';
					unset($_SESSION['$reg_ok']); 
				}
				include 'form_login.html';
				echo '</div>';
				include 'footer.php';
			}     
		?>         
		</div>	
		<script src="js/main.js"></script>   
		<script src="js/2.js"></script> 
	</body>
	</html>
	