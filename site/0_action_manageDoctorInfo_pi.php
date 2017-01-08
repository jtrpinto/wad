<?php
include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;

  $doctor_id = $_SESSION['doctor_id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $citizen_id = $_POST['citizen_id'];
  $birth_date = $_POST['birth_date'];
  $gender = $_POST['gender'];
  $first_day_of_service = $_POST['first_day_of_service'];
  $is_active = $_POST['is_active'];

 
  $stmt = $conn->prepare('UPDATE wad.doctors SET first_name = ?, last_name = ?, citizen_id = ?, birth_date = ?, gender = ?, first_day_of_service = ?, is_active = ? WHERE id = ?');
  $result = $stmt->execute(array($first_name, $last_name, $citizen_id, $birth_date, $gender, $first_day_of_servic, $is_active, $doctor_id));

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


