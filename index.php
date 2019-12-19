<!DOCTYPE html>
<html>
  <head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <title>Main Page</title>
  </head>
  <body>
  
    <div id="container">
  
      <?php
        include 'user_logged.php';
        include 'navbar.php';
	  ?>
	  
	  <header>
		  <h1> Search for a movie .. </h1>
		  <form action="search.php" method="GET"> 
			  <div class="container h-100">
				<div class="d-flex justify-content-center h-100">
					<div class="searchbar">
						<input class="search_input" type="text" name="movie" placeholder="Search...">
						<a href="#" class="search_icon"><i class="fas fa-search"></i></a>
					</div>
				</div>
			  </div>
		  </form>
	  </header>
	  
	  <div class="container">
		<div class="row">
			<div class="col-sm">
				first column
			</div>
			<div class="col-sm">
				second column
			</div>
		</div>
	  </div>
	  
	  <?php
	  
		class MovieStats {
			public $movie_id;
			public $vote_love;
			public $all_votes;
			public function __construct($movie_id){ 
				$this->movie_id = $movie_id;
				$this->vote_love = 0;
				$this->all_votes = 0;
			}
		}
		
		include 'config.php';
		
		$movie_id_list = array();
		$sql = "SELECT * FROM rated_movie";
		$result = mysql_query($sql);
		if($result) {
			if(mysql_num_rows($result) > 0 ) {
				while($row = mysql_fetch_array($result)) {
					$entered = False;
					foreach ($movie_id_list as $m_key) { 
						if($m_key->movie_id == $row['movie_id']) {
							if($row['vote'] == 'LOVED')
								$m_key->vote_love++;
							$m_key->all_votes++;
							$entered = True;
						}
					}
					if(!$entered){
						$movie_obj = new MovieStats($row['movie_id']);
							if($row['vote'] == 'LOVED')
								$movie_obj->vote_love++;
							$movie_obj->all_votes++;
						array_push($movie_id_list, $movie_obj);
					}
				}
				mysql_free_result($result);
			}
			else 
				echo "<p> Wrong input values!<br>Error: , " . $result . "</p>";
			
			foreach($movie_id_list as $key)
					echo '<p>title: ' . $key->movie_id . ', liked: ' . $key->vote_love . ', all_votes: ' . $key->all_votes . '</p>';
		}
		else 
			echo "<p>No result from server!<br>Error: " . $result . "</p>";
		
	  ?>
	  
	  <?php
        include 'footer.php';
      ?>
		
    </div>
  </body>
</html>