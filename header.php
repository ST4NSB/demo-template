<header>
  
  <?php 
    if($_SESSION['$user_logged'])
      echo "<p>welcome, " . $_SESSION['$name'] . " " . $_SESSION['$surname'] . "!</p>"; 
  ?>
</header>
