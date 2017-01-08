<?php
include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;

  $doctor_id = $_SESSION['doctor_id'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $street = $_POST['street'];
  $floor_app = $_POST['floor_app'];
  $doornumber = $_POST['doornumber'];
  $postal_code = $_POST['postal_code'];
  $phone = $_POST['number'];
  $email = $_POST['email'];
 
  $stmt = $conn->prepare('UPDATE wad.doctors SET country = ?, city = ?, street = ?, floor_app = ?, doornumber = ?, postal_code = ?, phone = ?, email = ? WHERE id = ?');
  $result = $stmt->execute(array($country, $city, $street, $floor_app, $doornumber, $postal_code, $phone, $email, $doctor_id));

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
