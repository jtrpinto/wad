<?php
include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;

  $doctor_id = $_SESSION['doctor_id'];
  $oldPassword = $_POST['oldPassword'];
  $newPassword = $_POST['newPassword'];
  $confirmPassword = $_POST['confirmPassword'];

// verificar se introduziu a palavra pass correta!
  $stmt1 = $conn->prepare('SELECT * FROM wad.doctors WHERE id = ? AND password = ?');
  $stmt1->execute(array($doctor_id, sha1($oldPassword))); //
  $user = $stmt1->fetch();

// verificar se a palavra pass Old é a correta!, se sim, entra no if:
if (print_r($user, true) !== '') {

  // veridicar se as duas novas palavras pass coincidem, se sim, entra no if:
  if (strcmp($newPassword, $confirmPassword) == 0){

    // alteração da palavra pass para a New:
    $stmt = $conn->prepare('UPDATE wad.doctors SET password = ? WHERE id = ?');
    $result = $stmt->execute(array(sha1($newPassword), $doctor_id));
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
  } 
  else {
    $_SESSION['error_message'] = "Information update failed!";
  }

header('Location: manageMyInfo.php'); 
?>
