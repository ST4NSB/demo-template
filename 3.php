<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <?php
		include 'php/user_logged.php';
		if($_SESSION['$user_logged']) {
			echo '<title>Pag 3</title>';
		}
		else {
			echo '<title>Register Page</title>';
		}
		?>
  </head>
  <body>
    <div id="container">
      <?php
        include 'navbar.php';
		if($_SESSION['$user_logged']) {
		}
		else {
			include 'structure/form_register.html';
		}
      ?>
    </div>
  </body>
</html>