<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <title>Main Page</title>
  </head>
  <body>
  
    <div id="container">
  
      <?php
        include 'php/user_logged.php';
        include 'navbar.php';
      ?>
      
      <header>
        <h1>Header tag</h1>
        <?php 
          if($_SESSION['$user_logged'])
            echo "<p>welcome, " . $_SESSION['$name'] . " " . $_SESSION['$surname'] . "!</p>"; 
        ?>
      </header>
      
      <div id="text_view">
        <div id="col1">
          <h3>Left view</h3>
          <?php
            if(!$_SESSION['$user_logged']) 
              include "form_login.html"; 
          ?>
        </div>
        <div id="col2">
          <h3>Right view</h3>
          <?php
            if(!$_SESSION['$user_logged']) 
              include "form_register.html";
          ?>
        </div>  
      </div>
      
      <footer>
        <h1>Footer tag</h1>
      </footer>
    
    </div>

  </body>
</html>