<?php
include_once('../database/user.php');

  $username = trim(strip_tags($_POST['username']));
  $password = ($_POST['password']);  

  if (verifyUser($username, $password)) {
    $_SESSION['username'] = $username;
  }
  
header('Location: index.php'); 
?>


