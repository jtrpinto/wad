<?php
include ('config/init.php');
//include_once('../database/user.php');
//trim(strip_tags(
//echo("first");
  $username = trim(strip_tags($_POST['username']));
  $password = $_POST['password'];  

  global $conn;
  $stmt = $conn->prepare('SELECT * FROM wad.doctors WHERE username = ? AND password = ?');
  $stmt->execute(array($username, sha1($password))); //
  $user = $stmt->fetch();

  if (print_r($user['id'], true) !== '') {
    
    $doctor_id = print_r($user['id'], true);
    $_SESSION['doctor_id'] = $doctor_id;
    $_SESSION['success_message'] = "Login succesful!";
    //file_put_contents('abc.txt', print_r($_SESSION['doctor_id'], true));
    header ('Location: index.php'); // alterar (porque a 1ª página é o index, e deveria ser o login)

  } else {
    $_SESSION['error_message'] = "Login failed!";
    header ('Location: myLogin.php');
  }

?>


