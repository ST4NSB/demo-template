<?php
    include 'config.php';
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $sha1_pass = sha1($password);
    
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$sha1_pass'";
    $result = mysql_query($sql);
    if($result) {
      while($row = mysql_fetch_array($result)) {
        session_start();
        $_SESSION['$user_logged'] = True;
        $_SESSION['$name'] = $row['nume'];
        $_SESSION['$surname'] = $row['prenume'];
      }
      mysql_free_result($result);
      header("Location: ../index.php");
    }
    else echo "<p>No accounts registered with this email!</p>";
?>