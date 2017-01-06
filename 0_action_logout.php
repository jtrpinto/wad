<?php
  include ('config/init.php');

  session_destroy();
 
  $_SESSION['success_message'] = "Logout successful!";

  header ('Location: myLogin.php');
?>