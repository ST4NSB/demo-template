<?php

	$key = 'beefda61';
	$movie = filter_input(INPUT_GET, 'movie', FILTER_SANITIZE_STRING);
	$uri = "http://www.omdbapi.com/?apikey=" . $key . "&t=" . $movie;
	
	$response = file_get_contents($uri);
	$jsonResp = json_decode($response);
	
	if($jsonResp->Response == "False")
		echo "Movie not found!";
	else 
		echo "<p>" . $response . "</p>";

?>