<?php
include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;


  $first_name = $_POST['first_name']; //
  $last_name = $_POST['last_name']; //
  $birth_date = $_POST['birth_date']; //
  $gender = $_POST['gender']; //
  $phone = $_POST['number']; //
  $citizen_id = $_POST['citizen_id']; //
  $email = $_POST['email']; //
  $speciality_id = '1'; //$_POST['speciality_id'];
  $first_day_of_service = $_POST['first_day_of_service']; //
  $is_active = $_POST['is_active']; //
  $password = $_POST['password']; //
  $confirmPassword = $_POST['confirmPassword']; //
  $username = $_POST['username']; //
  $country = $_POST['country']; //
  $city = $_POST['city']; //
  $street = $_POST['street']; //
  $floor_app = $_POST['floor_app'];
  $doornumber = $_POST['doornumber'];
  $postal_code = $_POST['postal_code']; //
  
  //$doctor_id = $_SESSION['doctor_id'];


  if (strcmp($password, $confirmPassword) == 0){
 
    $stmt = $conn->prepare('INSERT INTO wad.doctors (first_name, last_name, birth_date, gender, phone, citizen_id, email, speciality_id, first_day_of_service, is_active, password, username, country, city, street, floor_app, doornumber, postal_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
    ?, ?, ?, ?, ?, ?, ?, ?);');
    $result = $stmt->execute(array($first_name, $last_name, $birth_date, $gender, $phone, $citizen_id, $email, $speciality_id, $first_day_of_service, $is_active, sha1($password), $username, $country, $city, $street, $floor_app, $doornumber, $postal_code));

    if ($result !== false) {
    $_SESSION['success_message'] = "Information updated succesfuly!";
    } 
    else {
      $_SESSION['error_message'] = "Information update failed!"; 
    }
  }
  else{
    $_SESSION['error_message'] = "Information update failed!"; 
  }

header('Location: index.php'); 
?>
