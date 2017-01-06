<?php
include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;


  $first_name = $_POST['first_name']; //
  $last_name = $_POST['last_name']; //
  $birth_date = $_POST['birth_date']; //
  $gender = $_POST['gender']; //
  $phone = $_POST['number']; //
  $healthcare_id = $_POST['healthcare_id']; //
  $email = $_POST['email']; //
  $country = $_POST['country']; //
  $city = $_POST['city']; //
  $street = $_POST['street']; //
  $floor_app = $_POST['floor_app'];
  $door_number = $_POST['door_number'];
  $postal_code = $_POST['postal_code']; //
  
  //$doctor_id = $_SESSION['doctor_id'];


  $stmt = $conn->prepare('INSERT INTO wad.patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email, country, city, street, floor_app, door_number, postal_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
  $result = $stmt->execute(array($first_name, $last_name, $birth_date, $gender, $phone, $healthcare_id, $email, $country, $city, $street, $floor_app, $door_number, $postal_code));

  if ($result !== false) {
    $_SESSION['success_message'] = "Information updated succesfuly!";
    move_uploaded_file($_FILES['photo']['tmp_name'], 'files/img/patients/' . $healthcare_id . '.jpg');
  } 
  else {
    $_SESSION['error_message'] = "Information update failed!"; 
  }


header('Location: myPatients.php'); 
?>
