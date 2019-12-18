<?php

$response = file_get_contents('http://www.omdbapi.com/?apikey=beefda61&t=avengers');
$response = json_decode($response);
echo "<p>" . $response . "</p>";

?>