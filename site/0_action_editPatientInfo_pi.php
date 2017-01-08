<?php
include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;

  $patient_id = $_POST['patient_id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $healthcare_id = $_POST['healthcare_id'];
  $birth_date = $_POST['birth_date'];
  $gender = $_POST['gender'];
 
  $stmt = $conn->prepare('UPDATE wad.patients SET first_name = ?, last_name = ?, healthcare_id = ?, birth_date = ?, gender = ? WHERE id = ?');
  $result = $stmt->execute(array($first_name, $last_name, $healthcare_id, $birth_date, $gender, $patient_id));

if ($result !== false) {
    $_SESSION['success_message'] = "Information updated succesfuly!";

    $stmt = $conn->prepare('SELECT * FROM wad.patient WHERE id = ?');
    $stmt->execute(array($patient_id));
    $doctor = $stmt->fetch();
  } 
  else {
    $_SESSION['error_message'] = "Information update failed!";    
  }

header("Location: editPatientInfo.php?patient_id=$patient_id"); 
?>
