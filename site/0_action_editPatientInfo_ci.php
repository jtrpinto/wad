<?php
include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;

  $patient_id = $_POST['patient_id'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $street = $_POST['street'];
  $floor_app = $_POST['floor_app'];
  $door_number = $_POST['door_number'];
  $postal_code = $_POST['postal_code'];
  $phone = $_POST['number'];
  $email = $_POST['email'];
 
  $stmt = $conn->prepare('UPDATE wad.patients SET country = ?, city = ?, street = ?, floor_app = ?, door_number = ?, postal_code = ?, phone = ?, email = ? WHERE id = ?');
  $result = $stmt->execute(array($country, $city, $street, $floor_app, $door_number, $postal_code, $phone, $email, $patient_id));

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
