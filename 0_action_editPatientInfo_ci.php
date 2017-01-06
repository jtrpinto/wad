<?php
include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;

  $patient_id = $_POST['patient_id'];
  $city = $_POST['city'];
  $street = $_POST['street'];
  $postal_code = $_POST['postal_code'];
  $phone = $_POST['number'];
  $email = $_POST['email'];
 
  $stmt = $conn->prepare('UPDATE wad.patients SET city = ?, street = ?, postal_code = ?, phone = ?, email = ? WHERE id = ?');
  $result = $stmt->execute(array($city, $street, $postal_code, $phone, $email, $patient_id));

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
