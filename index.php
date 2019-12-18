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
        include 'php/user_logged.php';
        include 'navbar.php';
	  ?>
	  
	  <header>
		  <h1> Search for a movie .. </h1>
		  <form action="php/search.php" method="GET"> 
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
        include 'structure/footer.php';
      ?>
		
    </div>
  </body>
</html>