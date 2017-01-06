<?php
header('Location: index.php'); 

include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;

  $doctor_id = $_SESSION['doctor_id'];
  //$username = $_POST['username'];
  $oldPassword = $_POST['oldPassword'];
  $newPassword = $_POST['newPassword'];
  $confirmPassword = $_POST['confirmPassword'];

// verificar se introduziu a palavra pass correta!
  $stmt1 = $conn->prepare('SELECT * FROM wad.doctors WHERE id = ? AND password = ?');
  $stmt1->execute(array($doctor_id, sha1($oldPassword))); //
  $user = $stmt1->fetch();
//file_put_contents('abc4.txt', print_r($user['id'], true));

if (print_r($user, true) !== '') {
//file_put_contents('abc4.txt', strval($newPassword));

  if (strcmp($newPassword, $confirmPassword) == 0){
    $stmt = $conn->prepare('UPDATE wad.doctors SET password = ? WHERE id = ?');
    $result = $stmt->execute(array(sha1($newPassword), $doctor_id));
    file_put_contents('abc4.txt', strval($doctor_id));
  }
  else{
    $_SESSION['error_message'] = "Information update failed!";
  }
}
else{
  $_SESSION['error_message'] = "Information update failed!";
}

 
//file_put_contents('abc4.txt', strval($username));


if ($result !== false) {
    $_SESSION['success_message'] = "Information updated succesfuly!";

    $stmt = $conn->prepare('SELECT * FROM wad.doctors WHERE id = ?');
    $stmt->execute(array($doctor_id));
    $doctor = $stmt->fetch();
    
  } else {
    $_SESSION['error_message'] = "Information update failed!";
    
  }

//include ('templates/header.php');
header('Location: manageMyInfo.php'); 
?>
