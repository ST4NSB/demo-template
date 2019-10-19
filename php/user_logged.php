<?php
  session_start();
  $_SESSION['$user_logged'] = True;
  header("Location: ../index.php");
?>