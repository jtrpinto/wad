<?php
include_once('config/init.php');

if (!isset($_SESSION['username'])) die;

  $doctor_id = $_POST['doctor_id'];
  $first_name = $_POST['first_name'];
  //$price = $_POST['price'];

  $stmt = $conn->prepare('UPDATE doctors SET first_name = ?, WHERE id = ?');
  $result = $stmt->execute(array($first_name, $doctor_id));

if ($result !== false) {
    $_SESSION['success_message'] = "Information updated succesfuly!";

    $stmt = $conn->prepare('SELECT * FROM doctors WHERE id = ?');
    $stmt->execute(array($doctor_id));
    $doctor = $stmt->fetch();
    
  } else {
    $_SESSION['error_message'] = "Information update failed!";

    $stmt = $conn->prepare('SELECT * FROM doctors WHERE id = ?');
    $stmt->execute(array($doctor_id));
    $doctor = $stmt->fetch();
    
  }

include ('templates/header.php');
header('Location: mangeMyInfo.php'); 
?>


