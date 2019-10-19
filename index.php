<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Main Page</title>
  </head>
  <body>
  
    <?php
      include 'navbar.php'
    ?>
    
    <header>
      <h1>Header tag</h1>
    </header>
    
    <div id="text_view">
      <div id="left_view">
        <h3>Left view</h3>
        <?php
          session_start();
          if(!$_SESSION['$user_logged']) {
            include "form_login.html"; 
            include "form_register.html";
          }
          else echo "<p>welcome</p>";
        ?>
      </div>
      <div id="right_view">
        <h3>Right view</h3>
      </div>  
    </div>
    
    <footer>
      <h2>Footer tag</h2>
    </footer>

  </body>
</html>