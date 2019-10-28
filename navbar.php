<nav>
  <ul>
    <li><a href="index.php">Index</a></li>
		<?php
		include 'php/user_logged.php';
		if($_SESSION['$user_logged']) {
			echo '<li><a href="2.php">Pag. 2</a></li>';
			echo '<li><a href="3.php">Pag. 3</a></li>';
		}
		?>
  </ul>
</nav>