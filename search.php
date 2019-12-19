<?php
	$key = 'beefda61';
	$movie = rawurlencode($_GET['movie']);
	//$movie = rawurlencode(filter_input(INPUT_GET, 'movie', FILTER_SANITIZE_STRING));
	$uri = 'http://www.omdbapi.com/?apikey=' . $key . '&t=' . $movie;
				
	$response = file_get_contents($uri, true);
	$json_resp = json_decode($response);
?>

<!DOCTYPE html>
<html>
  <head>
  
  	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <?php echo "<title>" . $movie . " - Searched</title>" ?>
  </head>
  <body>
  
    <div id="container">
  
      <?php
        include 'user_logged.php';
        include 'navbar.php';
	  ?>
	  
	  <?php
			if($json_resp->Response == "False")
				echo "<h1>Movie not found!</h1>";
			else {
				echo "<h1>" . $json_resp->Title . " (" . $json_resp->Year . ")<h1>";
				echo "<h2>Rated: " . $json_resp->Rated . "<h2>";
				echo "<h2>Genre: " . $json_resp->Genre . "<h2>";
				echo '<img class="big_poster" src="' . $json_resp->Poster . '" alt="movie poster">';
				echo "<p>" . $json_resp->Plot . "</p>";
				
				if($_SESSION['$user_logged']) {
					include 'config.php';
					
					$u_id = $_SESSION['$user_id'];
					$mv_id = $json_resp->imdbID;
					$sql = "SELECT * FROM rated_movie WHERE user_id='$u_id' AND movie_id='$mv_id'";
					$result = mysql_query($sql);
					if($result) {
						if(mysql_num_rows($result) > 0 ) {
							echo '<p>You already voted this movie!</p>';
						}
						else {
							echo '<form action="rating.php" method="post">';
							echo '<input type="hidden" name="movieId" value="' . $json_resp->imdbID . '">';
							echo '<input type="hidden" name="movieTitle" value="' . $json_resp->Title . '">';
							echo '<input type="submit" name="action" value="loved">';
							echo '<input type="submit" name="action" value="hated" >';
							echo '</form>';
						}
					}
				}
				else {
					echo '<p><a href="2.php">Login</a> or <a href="3.php">Register</a> to RATE this movie!';
				}
			}
	   ?>
	  
	  <?php
        include 'footer.php';
      ?>
		
    </div>
  </body>
</html>