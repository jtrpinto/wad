<?php
header('Location: index.php'); 

include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;

  $doctor_id = $_SESSION['doctor_id'];
  $city = $_POST['city'];
  $street = $_POST['street'];
  $postal_code = $_POST['postal_code'];
  $phone = $_POST['number'];
  $email = $_POST['email'];
 
file_put_contents('abc4.txt', strval($phone));
  $stmt = $conn->prepare('UPDATE wad.doctors SET city = ?, street = ?, postal_code = ?, phone = ?, email = ? WHERE id = ?');
  $result = $stmt->execute(array($city, $street, $postal_code, $phone, $email, $doctor_id));

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
