<header>
  <h1>Header tag</h1>
  <?php 
    if($_SESSION['$user_logged'])
      echo "<p>welcome, " . $_SESSION['$name'] . " " . $_SESSION['$surname'] . "!</p>"; 
  ?>
</header>
