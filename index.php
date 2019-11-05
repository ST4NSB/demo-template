<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/theme.css">	
	
    <title>Main Page</title>
  </head>
  <body>
  
    <div id="container">
  
      <?php
        include 'php/user_logged.php';
        include 'navbar.php';
				include 'structure/header.php';
			?>
			<div class="container">
					<div class="row">
						<div class="col-sm">
							One of three columns
						</div>
						<div class="col-sm">
							One of three columns
						</div>
					</div>
			</div>
			<?php
        include 'structure/footer.php';
      ?>
		
    </div>
  </body>
</html>