<?php
    include 'config.php';
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $sha1_pass = sha1($password);
    
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$sha1_pass'";
    $result = mysql_query($sql);
    if($result) {
			if(mysql_num_rows($result) > 0 ) {
				while($row = mysql_fetch_array($result)) {
					session_start();
					$_SESSION['$user_logged'] = True;
					$_SESSION['$user_id'] = $row['id'];
					$_SESSION['$name'] = $row['nume'];
					$_SESSION['$surname'] = $row['prenume'];
				}
				mysql_free_result($result);
				header("Location: index.php");
			}
			else 
				echo "<p> Wrong input values!<br>Error: , " . $result . "</p>";
    }
    else 
			echo "<p>No result from server!<br>Error: " . $result . "</p>";
?>