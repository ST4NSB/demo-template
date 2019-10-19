<?php
    include 'config.php';
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $sha1_pass = sha1($password);
    
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$sha1_pass'";
    $result = mysql_query($sql);
    if($result) {
      while($row = mysql_fetch_array($result)) {
        include 'user_logged.php';
      }
      mysql_free_result($result);
    }
    else echo "<p>No accounts registered with this email!</p>";
?>