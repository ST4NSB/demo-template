<?php
    include 'config.php';
    
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $sha1_pass = sha1($password);
    
    $sql = "INSERT INTO user (nume, prenume, email, password, activ, tip, sir) 
        VALUES ('$name', '$surname', '$email', '$sha1_pass', 'TBA', 'TBA', 'TBA')";
    if(mysql_query($sql, $conn->connection)) {
      header("Location: 2.php");
    }
    else 
      echo "<p>Something went wrong! <br>Error: " . $sql . "<br>" . mysql_error($conn) . "</p>";
?>