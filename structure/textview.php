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