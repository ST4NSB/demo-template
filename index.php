<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Main Page</title>
  </head>
  <body>
    
    <?php
      session_start();
      if(!$_SESSION['$user_logged']) {
        include "form_login.html"; 
        include "form_register.html";
      }
      else echo "<p>welcome</p>";
    ?>

  </body>
</html>