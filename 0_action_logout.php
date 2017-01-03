<?php
  include ('config/init.php');

  session_destroy();
 
  
  //session_start();
  $_SESSION['success_message'] = "Logout successful!";

  header ('Location: myLogin.php');
?>